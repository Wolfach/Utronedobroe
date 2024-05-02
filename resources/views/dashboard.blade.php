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
        <div class="main__block">
            foreach ($animeposters as $animeposter)
            <div class="main__block__title"><h1>{{$animeposter->title}}</h1></div>
            endforeach
        </div>
    </main>
</x-app-layout>

<style>
    .main{
    width: 1366px;
    height: 600px;
    margin-top: 10px;
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
</style>
