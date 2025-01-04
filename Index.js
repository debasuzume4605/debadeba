const container = document.querySelector('.content-section');
const icons = document.querySelectorAll('.content-section a');

icons.forEach((icon) => {
    icon.addEventListener('mouseover', () => {
        // すべてのアイコンから中央と小さいクラスを削除
        icons.forEach((item) => {
            item.classList.remove('central');
            item.classList.remove('small');
        });

        // ホバーされたアイコンに中央のクラスを追加
        icon.classList.add('central');

        // 他のアイコンには小さくするクラスを追加
        icons.forEach((item) => {
            if (item !== icon) {
                item.classList.add('small');
            }
        });
    });
});
