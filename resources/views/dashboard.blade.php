
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
        <section class="flex flex-row">
        @foreach($animedesc as $animeelement)
        <div class="block">
        <div class="block__wrap">
            <div class="columns-3">
                <span>Тип: {{$animeelement->type}}</span>
                <span>Эпизоды: {{$animeelement->episodes}}</span>
                <span>Статус: </span>
                <span>Год: {{$animeelement->year}}</span>
                <span>Студия: </span>
                <span>Жанр: {{$animeelement->genre}}</span>
                </div>
            </div>
            <a href=""><img src="{{ asset($animeelement->poster)}}" alt="" class="img_block"></a>
            <div class="block_text"><a href="" class="block__text-1">{{$animeelement->title}}</a></div>
        </div>
        @endforeach
    </section>
    </main>
</x-app-layout>

<style>
    .main{
        justify-content: center;
    align-items: center;
    width: 100%;
    flex-direction: column;
    display: flex;
    height: 100%;
    margin-top: 10px;
}
.flex{
    flex-wrap: wrap;
    width: 1160px;
}
.block{
    padding: 20px;
}
.block__wrap{
    justify-content: center;
    align-items: center;
    display: flex;
    color: white;
    position: absolute;
    visibility: hidden;
    height: 350px;
    width: 250px;
}
.block:hover .block__wrap{
    visibility: visible;
    background-color:#000;
    opacity:0.7;
    color:white;
    opacity:2s;
    cursor: pointer;
}

.columns-3{
    margin-left: 40px;
    width: 250px;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 20px;
}
.columns-3 span{
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    font-size: 20px;
}

/* .block-1__wrap__list{
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
} */
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
.columns-3{
    flex-direction: column;
    display: flex;
}
</style>
