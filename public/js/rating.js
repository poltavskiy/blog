$(function () {
    'use strict';
    function sendAjax(url, id) {
        let token = $('#_token').val();
        let that = this;
        $.ajax({
            url: url,
            method: 'post',
            dataType: 'json',
            data: {_token: token, id: id},
            success: function (data) {
                $(that).siblings('.rating').html(data.rating)
            }
        });
    }

    $('.plus').click(function (event) {
        event.preventDefault();
        let id = $(this).siblings('.rating').data('post');
        sendAjax.apply(this, ['/rating/plus', id]);
    });

    $('.minus').click(function (event) {
        event.preventDefault();
        let id = $(this).siblings('.rating').data('post');
        sendAjax.apply(this, ['/rating/minus', id]);
    });
});