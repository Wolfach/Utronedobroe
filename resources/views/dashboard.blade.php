<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <section>
        <img src="\images\mainpage.png" alt="">
    </section>
    <main class="main">
        <div class="main__search">
            <input class="form-control" id="search" placeholder="Название">
        </div>
        <div class="main__new">
            <div class="main__new__text">Недавно загруженное:</div>
        </div>
        <section class="block">
        <div class="block-1">
        <div class="block-1__wrap">
            <div class="block-1__wrap__list">
                <span>Тип: ТВ-сериал</span>
                <span>Эпизоды: 0/25</span>
                <span>Статус: Вышло</span>
                <span>Год: 2012</span>
                <span>Студия: A-1 Pictures</span>
                <span>Жанр: Экшен, Приключения, Фэнтези, Романтика</span>
                </div>
            </div>
            <a href=""><img src="https://github.com/Wolfach/2024SpringPractic/blob/original/public/images/posters/8958e24041338f53bdab4955ed395d66.jpeg?raw=true" alt="" class="img_block"></a>
            <div class="block_text"><a href="" class="block__text-1">Мастер меча онлайн</a></div>
        </div>
        <div class="block-2">
        <div class="block-1__wrap">
            <div class="block-1__wrap__list">
                <span>Тип: ТВ-сериал</span>
                <span>Эпизоды: 0/25</span>
                <span>Статус: Вышло</span>
                <span>Год: 2012</span>
                <span>Студия: A-1 Pictures</span>
                <span>Жанр: Экшен, Приключения, Фэнтези, Романтика</span>
                </div>
            </div>
            <a href=""><img src="https://github.com/Wolfach/2024SpringPractic/blob/original/public/images/posters/Jigokuraku.png?raw=true" alt="" class="img_block"></a>
            <div class="block_text"><a href="" class="block__text-1">Адский рай</a></div>
        </div>
        <div class="block-3">
            <a href=""><img src="https://github.com/Wolfach/2024SpringPractic/blob/original/public/images/posters/%D0%92%D0%B5%D1%87%D0%B5%D1%80%D0%B0%20%D1%81%20%D0%BA%D0%BE%D1%88%D0%BA%D0%B5%D0%B9.png?raw=true" alt="" class="img_block"></a>
            <div class="block_text"><a href="" class="block__text-1">Вечера с кошкой</a></div>
        </div>
        <div class="block-4">
            <a href=""><img src="https://desu.shikimori.one/uploads/poster/animes/54789/0f5b92554173d58f55b5172af2429657.jpeg" alt="" class="img_block"></a>
            <div class="block_text"><a href="" class="block__text-1">Моя геройская академия</a></div>
        </div>
    </section>
    <section class="block">
        <div class="block-1">
            <a href=""><img src="https://desu.shikimori.one/uploads/poster/animes/54900/40587f7f08a709f3b987c9e0f4cf4009.jpeg" alt="" class="img_block"></a>
            <div class="block_text"><a href="" class="block__text-1">Ветролом</a></div>
        </div>
        <div class="block-2">
            <a href=""><img src="https://desu.shikimori.one/uploads/poster/animes/52588/c30b9cf86423b311af2abe673ccbcdd0.jpeg" alt="" class="img_block"></a>
            <div class="block_text"><a href="" class="block__text-1">Кайдзю номер восемь</a></div>
        </div>
        <div class="block-3">
            <!-- <a href=""><img src="" alt="" class="img_block"></a> -->
            <div class="block_text"><a href="" class="block__text-1"></a></div>
        </div>
        <div class="block-4">
            <!-- <a href=""><img src="" alt="" class="img_block"></a> -->
            <div class="block_text"><a href="" class="block__text-1"></a></div>
        </div>
    </section>
    </main>
</x-app-layout>

<style>
    .main{
    width: 100%;
    height: 100%;
    margin-top: 10px;
}
.block-1__wrap{
    justify-content: center;
    align-items: center;
    display: flex;
    color: white;
    position: absolute;
    visibility: hidden;
    height: 350px;
    width: 250px;
}
.block-1:hover .block-1__wrap{
    visibility: visible;
    background-color:#000;
    opacity:0.7;
    color:white;
    opacity:2s;
    cursor: pointer;
}
/* .img_block:hover{
    background-color:#000;
    opacity:0.9;
    opacity:2s;
} */

.block-1__wrap__list{
    display: flex;
    flex-direction: column;
    margin-left: 40px;
}
.block-1__wrap__list span{
    text-overflow: ellipsis;
    overflow: hidden;
    width: 250px;
    white-space: nowrap;
    font-size: 20px;
}
.main__search{
    height: 25px;
    justify-content: center;
    display: flex;
}
.main__search input{
    width: 300px;
}
.main__new__text{
    font-family: 'Roboto Slab', serif;
    text-decoration: none;
    font-size: 0.5cm;
    display: flex;
    justify-content: center;
    color: white;
    margin-top: 50px;
}
@import url('https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    background: #181616;
}
.block {
    display: flex;
    padding: 50px 50px 0px 50px;
    justify-content: space-between;
}
.block-1 {
    margin-right: 50px;
}
.block-2 {
    margin-right: 50px;
}
.block-3 {
    margin-right: 50px;
}

.block_text {
    display: flex;
    justify-content: center;
}
.block__text-1 {
    text-align: center;
    width: 250px;
    font-family: "PT Sans", sans-serif;
    font-weight: 400;
    font-style: normal;
    color: white;
    text-decoration: none;
    font-size: 16px;
    transition: 0.9s;
    height: 10px;
}
.block__text-1:hover {
    color: rgb(190, 190, 190);
    transition: 0.9s;

    font-size: 18px;
}
.img_block {
    height: 350px;
    width: 250px;
}
</style>
