<?php view('partials.head', compact('title')); ?>;

<main class="page-main">
    <h1><?= $title?></h1>
    <form action="/etudiants" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        <div>
            <label for="first-name">Prénom <sup>*</sup></label>
            <input id="first-name" name="first-name" type="text" placeholder="Jean" required>
        </div>
        <div>
            <label for="family-name">Nom de famille <sup>*</sup></label>
            <input id="family-name" name="last-name" type="text" placeholder="Valjean" required>
        </div>
        <div>
            <label for="email">Email <sup>*</sup></label>
            <input id="email" name="email" type="email" placeholder="jean.valjean@miserables.fr" required>
        </div>
        <div>
            <label for="matricule">Matricule <sup>*</sup></label>
            <input id="matricule" name="matricule" type="text" placeholder="tecg01234" required>
        </div>
        <div>
            <label for="birth-date">Date de naissance <sup>*</sup></label>
            <input id="birth-date" name="birth-date" type="date" placeholder="01/01/2000" required>
        </div>
        <div>
            <label for="profile-photo">Matricule <sup>*</sup></label>
            <input id="profile-photo" name="profile-photo" type="file" placeholder="jean" required>
        </div>
        <div>
            <button type="submit">Enregister l'étudiant</button>
        </div>
    </form>
</main>
