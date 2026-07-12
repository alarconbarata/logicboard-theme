console.log('LogicBoard Admin carregado.');jQuery(function ($) {

    $('.logicboard-upload').on('click', function (e) {

        e.preventDefault();

        const button = $(this);

        const container = button.closest('.logicboard-media-field');

        const input = container.find('.logicboard-media-url');

        const preview = container.find('.logicboard-preview');

        const mediaUploader = wp.media({

            title: 'Selecionar imagem',

            button: {
                text: 'Usar imagem'
            },

            multiple: false

        });

        mediaUploader.on('select', function () {

            const attachment = mediaUploader
                .state()
                .get('selection')
                .first()
                .toJSON();

            input.val(attachment.url);

            preview
                .attr('src', attachment.url)
                .show();

        });

        mediaUploader.open();

    });

});