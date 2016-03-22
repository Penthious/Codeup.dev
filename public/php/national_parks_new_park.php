


        <form class=""  method="post">

            <div class="">
                <label for="name">Name:</label>
                <input id="name" type="text" name="name">
                <label for="location">Location:</label>
                <input id="location" type="text" name="location">
            </div>


            <div class="dateInYearFormat">
                <label for="date_established_first_section">Established on:</label>
                <input class="boxesForInput" id="date_established_first_section" type="text" name="date_established_first_section" placeholder="xxxx" value="<?= Input::get('date_established_first_section') ?>"  maxlength="4">
                <p class="dateInYearFormat">
                    /
                </p>
                <input class="boxesForInput" id="date_established_second_section" type="text" name="date_established_second_section" placeholder="xx" value="<?= Input::get('date_established_second_section') ?>" >
                <p class="dateInYearFormat">
                    /
                </p>
                <input class="boxesForInput" id="date_established_third_section" type="text" name="date_established_third_section" placeholder="xx" value="<?= Input::get('date_established_third_section') ?>">
            </div>
            <div class="">
                <label for="area_in_acres">Size in acres:</label>
                <input id="area_in_acres" type="text" name="area_in_acres" value="<?= Input::get('area_in_acres') ?>">
            </div>
            <div class="">
                <label for="park_img">upload a img:</label>
                <input id="park_img" type="text" name="park_img">
            </div>
            <div class="">
                <label for="describtion">Park describtion:</label>
                <input id="describtion" type="text" name="describtion">
            </div>
                <button type="submit">Submit Form</button>
        </form>
