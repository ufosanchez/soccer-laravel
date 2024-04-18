<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        <h1 class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">Endpoint to Routes:</h1>

        <a href="http://127.0.0.1:8000/leagues">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #d5bdaf">
                    <div class="p-6 text-gray-900">
                        <p><strong>http://127.0.0.1:8000/leagues</strong> </p>
                        <p class="text-center"><strong>***League List***</strong></p>
                        <p class="mt-2">This is a list of soccer leagues, you can see all the leagues and you can also click on them. When you click you can see each link separately (show) and you can also edit and delete the link. If you are logged in you will be able to access these methods, otherwise you will be redirected to the login page</p>

                        <p class="text-center mt-2"><strong>CRUD Methods</strong></p>
                        <ul class="ms-5">
                            <li>• Create -> Only Admin</li>
                            <li>• Read (List of leagues) -> Anyone</li>
                            <li>• Read (league in particular) -> Anyone</li>
                            <li>• Update -> Only Admin</li>
                            <li>• Delete -> Only Admin</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </a>

        <a href="http://127.0.0.1:8000/leagues/create">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2">
                <div class="overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #95d5b2">
                    <div class="p-6 text-gray-900">
                        <p><strong>http://127.0.0.1:8000/leagues/create</strong> </p>
                        <p class="text-center"><strong>***Create  new League***</strong></p>
                        <p class="mt-2">If you are logged in, you can add a new League by using the form of this endpoint</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="http://127.0.0.1:8000/leagues/1/edit">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2">
                <div class="overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #89c2d9">
                    <div class="p-6 text-gray-900">
                        <p><strong>http://127.0.0.1:8000/leagues/{id}/edit</strong> </p>
                        <p class="text-center"><strong>***Update a League***</strong></p>
                        <p class="mt-2">You must to log in to update a League, this box allows you to update the id = 1, but you must to provide the id of the League that you want to update. The code will render the appropiate id when the Leage card is render</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="http://127.0.0.1:8000/leagues/trash/1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2">
                <div class="overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #ff8fa3">
                    <div class="p-6 text-gray-900">
                        <p><strong>http://127.0.0.1:8000/leagues/trash/{id}</strong> </p>
                        <p class="text-center"><strong>***Delete a League***</strong></p>
                        <p class="mt-2">To delete a Legue you just have to provide the id of the League, for thsi expample I set the id = 1, but you have to provide the one that you want, if you click on the delete link of the league card the id will be redender by itself</p>
                    </div>
                </div>
            </div>
        </a>

        <a href="http://127.0.0.1:8000/players">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #d5bdaf">
                    <div class="p-6 text-gray-900">
                        <p><strong>http://127.0.0.1:8000/players</strong> </p>
                        <p class="text-center"><strong>***Players List***</strong></p>
                        <p class="mt-2">In this list you can find players from different teams and leagues. For this, create a <strong>Double Join</strong> to be able to obtain the player's team as well as the corresponding league.</p>
                        <p class="text-center mt-2"><strong>Relationship 1-M (Teams-Players), I used 2 Joins, 1: between Players-Teams and 1: Teams-Leagues</strong></p>
                    </div>
                </div>
            </div>
        </a>

        <a href="http://127.0.0.1:8000/teams">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="background-color: #d5bdaf">
                    <div class="p-6 text-gray-900">
                        <p><strong>http://127.0.0.1:8000/teams</strong> </p>
                        <p class="text-center"><strong>***Teams List***</strong></p>
                        <p class="mt-2">This is a list of the best soccer teams in the world, in this you can see each of these countries, this is only for visualization. This table has a <strong>1-M relationship</strong> with the League table, a <strong>JOIN</strong> was made to be able to print which league each team belongs to</p>
                        <p class="text-center mt-2"><strong>Relationship 1-M (Leagues-Teams), I used 1 Join</strong></p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</x-app-layout>
