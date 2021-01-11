import $ from 'jquery';
import './components/slider';

$("#canvas").click((e) => {
    $(".canvas").addClass("canvas--open");
    $("#backdrop").addClass("backdrop");
});

$("#canvas-close").click(() => {
    $(".canvas").removeClass("canvas--open");
    $("#backdrop").removeClass("backdrop");
});

$("#search").click(() => {
    $(".search").addClass("search--display");
    $("#search-close").addClass("search-close--display")
    $("html").css({
        "overflow-y": "scroll",
        "position": "fixed",
        "width": "100%",
        "left": "0px",
        'top': "0px",
    })
});

$("#search-close").click(() => {
    $(".search").removeClass("search--display");
    $("#search-close").removeClass("search-close--display");
    $("html").removeAttr("style");
});

$(document).on('click', '.share_icon_link', function(e){
    e.preventDefault();
    let link = $(this).data('share_link');
    window.open(link, '_blank');
});

$('.wp_kali_search_btn').on('click', function(){
    let query = $(this).siblings('input').val();
    window.location.href = '?s=' + query;
});

$("#menu-toggle").click((e) => {
    $('#menu-hamburger').addClass('menu-hamburger--open');
});

$("#menu-hamburger-close").click((e) => {
    $('#menu-hamburger').removeClass('menu-hamburger--open');
});

$(".submenu-toggle").click((e) => {
    var id = e.target.id;
    if ($("#" + id).hasClass('open-menu')) {
        $("#" + id).removeClass('open-menu');
    } else {
        $("#" + id).addClass('open-menu');
    }
});
