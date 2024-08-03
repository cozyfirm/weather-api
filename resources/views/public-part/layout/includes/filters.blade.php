<section class="desktop-content-search sticky">
    <div class="search__container">
        <div class="title__w">
            <div class="icon_w">
                <i class="fas fa-search"></i>
            </div>
            <input type="text" name="title" id="title" placeholder="{{ __('Pretražite..') }}">
        </div>

        <div class="dropdown_w">
            <select name="status" id="status">
                <option value="">Status nekretnine</option>
                <option value="1">Na prodaju</option>
                <option value="2">Rent</option>
                <option value="3">Rasprodaja</option>
            </select>

            <div class="icon_w">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div class="dropdown_w">
            <select name="type" id="type">
                <option value="">Vrsta nekretnine</option>
                <option value="1">Kuća</option>
                <option value="2">Stan</option>
                <option value="3">Apartman</option>
            </select>

            <div class="icon_w">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div class="advanced__wrapper">
            <div class="advanced_btn">
                <i class="fas fa-cog"></i>
                <p>{{ __('Napredna pretraga') }}</p>
            </div>

            <div class="search_btn">
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </div>
        </div>
    </div>

    <div class="advanced__filters">
        <div class="dropdown_w">
            <select name="status" id="status">
                <option value="">Status nekretnine</option>
                <option value="1">Na prodaju</option>
                <option value="2">Rent</option>
                <option value="3">Rasprodaja</option>
            </select>

            <div class="icon_w">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div class="dropdown_w">
            <select name="type" id="type">
                <option value="">Vrsta nekretnine</option>
                <option value="1">Kuća</option>
                <option value="2">Stan</option>
                <option value="3">Apartman</option>
            </select>

            <div class="icon_w">
                <i class="fas fa-chevron-up"></i>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div class="input_w">
            <input type="number" id="area_from" name="area_from" placeholder="{{ __('Površina od') }}" min="0" max="1000000" step="1">
        </div>
        <div class="input_w">
            <input type="number" id="area_to" name="area_to" placeholder="{{ __('Površina do') }}" min="0" max="1000000" step="1">
        </div>
        <div class="input_w">
            <input type="text" id="id" name="id" placeholder="{{ __('ID nekretnine') }}">
        </div>
    </div>
</section>
