<x-layout>
    <h1>Welkom op de homepagina!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid culpa distinctio eaque hic, illo ipsa iste
        maxime nemo, officia officiis omnis ratione reprehenderit rerum sint tenetur vero. Animi, fugit?
        <br>
        <a href="/about">About me</a>
    </p>


    <form action="" method="post">
        <label for="name">Name</label>
        <x-forms.input required
                       :active="$action == true ? true : false"></x-forms.input>
    </form>
</x-layout>
