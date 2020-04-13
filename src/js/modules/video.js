/**
 * Youtube video
 */
let video = document.querySelectorAll('[data-youtube]');

video.forEach(item => {
    item.addEventListener('click', function () {
        let id = item.dataset.youtube,
            padding = document.documentElement.clientWidth > 768 ? 120 : 30,
            ratio = 608 / 1080,
            width = document.documentElement.clientWidth - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';

        let div = document.createElement('div');
        div.className = "outer";
        div.innerHTML = html;
        document.body.append(div);
    });
});

document.addEventListener('mouseup', e => {
    let frame = document.querySelector('.outer iframe');
    if(!!frame) {
        let target = e.target;
        let its_menu = target === frame.parentElement || frame.parentElement.contains(target);

        if (its_menu) {
            document.querySelector('.outer').remove();
        }
    }
});
