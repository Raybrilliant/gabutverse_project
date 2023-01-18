$(document).ready(function () {
    $('#bannerMovie').DataTable();
});
$(document).ready(function () {
    $('#mostViewed').DataTable({
        order : [[3,'desc']]
    });
});
$(document).ready(function () {
    $('#allMovies').DataTable();
});
$(document).ready(function () {
    $('#allRequest').DataTable();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsive:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

const scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '#navbar-main'
  })
 
$('#search').on('keyup',function(){
    const value = $(this).val().toLowerCase();
    $('.poster').each(function(){
        if ($(this).text().toLowerCase().search(value) > -1){
            $(this).show();
            $(this).prev('#title').last().show();
        }
        else {
            $(this).hide();
        }
    })
})

// Ajax
$('#submitToken').on('click',function(){
    const token = $('#tokenApi').val();
    const name = $('.name').text();
    $.ajax({
        method : 'POST',
        data : {
            'token' : token ,
            'name' : name,
        },
        url : 'http://localhost:8000/api/addToken',
        dataType : 'json'
    })
})

$('#submitID').on('click', function(){
    const id = $('#idMovie').val();
    const token = $('#tokenApi').val();
    $.ajax({
        method : 'GET',
        url : "https://api.themoviedb.org/3/find/"+id+"?api_key="+token+"&language=en-US&external_source=imdb_id",
        dataType : 'json'
    }).done(function(data){
        $('#movieName').val(data.movie_results[0].title)
        $('#originalName').val(data.movie_results[0].original_title)
        $('#movieYear').val(data.movie_results[0].release_date)
        $('#rating').val(data.movie_results[0].vote_average)
        $('#popularity').val(data.movie_results[0].popularity)
        getGenres(data.movie_results[0].genre_ids)
        $('#language').val(data.movie_results[0].original_language)
        $('#overview').val(data.movie_results[0].overview)
        $('#posterPath').val(data.movie_results[0].poster_path)
        $('#backdropPath').val(data.movie_results[0].backdrop_path)
        onSuccess(data.movie_results[0].id,token);
    })
})

function onSuccess(id_tmdb,token){
    $.ajax({
        method : 'GET',
        url : "https://api.themoviedb.org/3/movie/"+id_tmdb+"/videos?api_key="+token,
        dataType : 'json'
    }).done(function(data){
        $('#trailer').val(data.results.reverse()[1].key);
    })
}

function getGenres(id_genre){
    const genres = []; 
    id_genre.forEach(function(id){
        switch (id) {
            case 28:
                genres.push('Action')
                break;
            case 12:
                genres.push('Adventure')
                break;
            case 16:
                genres.push('Animation')
                break;
            case 35:
                genres.push('Comedy')
                break;
            case 80:
                genres.push('Crime')
                break;
            case 99:
                genres.push('Documentary')
                break;
            case 18:
                genres.push('Drama')
                break;
            case 10751:
                genres.push('Family')
                break;
            case 14:
                genres.push('Fantasy')
                break;
            case 36:
                genres.push('History')
                break;
            case 27:
                genres.push('Horror')
                break;
            case 10402:
                genres.push('Music')
                break;
            case 9648:
                genres.push('Mystery')
                break;
            case 10749:
                genres.push('Romance')
                break;
            case 878:
                genres.push('Science Fiction')
                break;
            case 10770:
                genres.push('TV Movie')
                break;
            case 53:
                genres.push('Thriller')
                break;
            case 10752:
                genres.push('War')
                break;
            case 37:
                genres.push('Western')
                break;
            default:
                break;
        }
        // console.log(genres);
        $('#genres').val(genres)
    })
}

// Count
$('.watch-film').on('click',function(){
    var views = parseInt($('#count').text());
    views ++ ;
    console.log(views);
    $('#count').text(views);
    var name = $('.name').text();

    $.ajax({
        method : 'POST',
        data : {
            'views' : views,
            'name' : name
        },
        url : 'http://localhost:8000/api/addViews',
        dataType : 'json'
    })
})