require('./bootstrap');
import * as $ from 'jquery';

$(function (){
    $('.edit').on('click', function (){
        var id = $(this).data('id');

        $.post(ajax_url, { _token: token, type: 'check', data: id }, function (result){
            if (result == 'success') {
                $('.fw-normal[data-id=' + id + ']').fadeOut(500, function () {
                    $(this).remove();
                });
            } else {
                $('#error .alert').html(result);
                $('#error').fadeIn(500);
            }
        });
    });

    $('.delete').on('click', function (){
        var id = $(this).data('id');

        $.post(ajax_url, { _token: token, type: 'delete', data: id }, function (result){
            if (result == 'success') {
                $('.fw-normal[data-id=' + id + ']').fadeOut(500, function () {
                    $(this).remove();
                });
            } else {
                $('#error .alert').html(result);
                $('#error').fadeIn(500);
            }
        });
    });

    $('#form-works-home').submit(function (e){
        e.preventDefault();

        var inputs = {
            'user_id': $('#user_id').val(),
            'priority_id': $('#priority_id').val(),
            'title': $('#title').val(),
            'description': $('#description').val(),
            'text': $('#text').val(),
            'status': $('#status').val()
        };

        $.post(ajax_url, { _token: token, type: 'add', data: inputs }, function(result) {
            if (result == 'success') {
                $('#form-alert').addClass('alert-success').html('Görev ekleme işlemi başarılıyla gerçekleşti.').fadeIn(500);
            }
            else {
                $('#form-alert').addClass('alert-danger').html(result).fadeIn(500);
            }
        });
    });

    $('#app-settings-open').click(function (){
        $('#app-help').hide();
        $('#app-notifications').hide();

        $('#app-settings').fadeToggle(500);

        if ($('#app-settings').css('display')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow', 'auto');
        }
    });

    $('#app-settings-close').click(function (){
       $('#app-settings').fadeOut(500);
       $('body').css('overflow', 'auto');
    });

    $('#app-help-open').click(function (){
        $('#app-settings').hide();
        $('#app-notifications').hide();

        $('#app-help').fadeToggle(500);

        if ($('#app-help').css('display')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow', 'auto');
        }
    });

    $('#app-help-close').click(function (){
        $('#app-help').fadeOut(500);
        $('body').css('overflow', 'auto');
    });

    $('#app-notifications-open').click(function (){
        $('#app-settings').hide();
        $('#app-help').hide();

        $('#app-notifications').fadeToggle(500);

        if ($('#app-notifications').css('display')) {
            $('body').css('overflow', 'hidden');
        } else {
            $('body').css('overflow', 'auto');
        }
    });

    $('#app-notifications-close').click(function (){
        $('#app-notifications').fadeOut(500);
        $('body').css('overflow', 'auto');
    });

    $('input[name=q]').focus(function (){
        $('.search-results').fadeIn();
    });

    $('*').click(function(event) {
        if (!$(event.target).is('.search-results') && !$(event.target).is('input[name=q]')) {
            $('.search-results').fadeOut();
        }
    });

    $('input[name=q]').change(function (){
        $('.search-results').fadeIn();

        var value = $(this).val();

        $.post(ajax_url, { _token: token, type: 'search', data: value }, function(result) {
            if (result != 'error') {
                if (result.length) {
                    $('.search-results ul li').remove();

                    $.each(result, function (key, value){
                        $('.search-results ul').append(
                            '<li>' +
                                '<a href="/works/' + value.id + '">' +
                                    '<div class="text-truncate" style="200px">' +
                                        value.title +
                                    '</div>' +
                                '</a>' +
                            '</li>'
                        );
                    });
                } else {
                    $('.search-results').fadeOut();
                }
            } else {
                $('.search-results').fadeOut();
            }
        });
    });

});
