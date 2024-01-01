<header class="fixed w-full" style="margin-top: 20px">
    <nav class="bg-white flex justify-between items-center mx-auto rounded px-10">
        <div class="flex flex-row">
            <a href="/"><img class="w-20 mr-5 py-2" src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>

        <div class="flex items-center">
            <div class="relative inline-block">
                <button onclick="toggleDropdown('myDropdown')" class="pill-button text-black py-2 px-2 rounded-full">
                    <i class="fa-solid fa-circle-user fa-2xl" style="color: black;"></i>
                    <span class="pill-text">Admin</span>
                </button>
                <div id="myDropdown"
                    class="dropdownlist absolute bg-white rounded-md right-0 mt-3 p-3 overflow-auto hidden"
                    style="background-color: red">
                    <div class="border-gray-800"></div>
                    <a href="/" class="p-2 text-black text-sm no-underline hover:no-underline block">
                        <i class="fas fa-sign-out-alt fa-fw"></i> Home
                    </a>
                    <a href="/login" class="p-2 text-black text-sm no-underline hover:no-underline block">
                        <i class="fas fa-sign-out-alt fa-fw"></i> Log Out
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<style>
.pill-button {
    border: 2px solid black;
}

.pill-button i {
    margin-right: 0.5rem;
}

.pill-text {
    color: black;
    padding: 0.5rem;
    border-radius: 10px;
    margin-right: 5px;
}
</style>

<script>
function toggleDropdown(dropdownId) {
    var dropdown = document.getElementById(dropdownId);
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
    } else {
        dropdown.classList.add('hidden');
    }
}
</script>