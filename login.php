<?php
require_once "templates/header.php";

?>

<section class="text-gray-400 bg-gray-900 body-font">
    <form action="" method="post" class="container px-5 py-24 mx-auto flex flex-wrap items-center">
            <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:m-auto w-full mt-10 md:mt-0">
                <h2 class="text-white text-lg font-medium title-font mb-5">Connexion</h2>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email_user" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="password" class="leading-7 text-sm text-gray-400">Mot de passe</label>
                    <input type="password" id="password" name="mdp_user" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Se connecter</button>
                <p class="text-xs mt-3">Literally you probably haven't heard of them jean shorts.</p>
            </div>
    </form>
</section>




<?php require_once "templates/footer.php"; ?>