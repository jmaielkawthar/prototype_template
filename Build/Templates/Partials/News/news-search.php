<?php
$class = isset($class) ? $class : '';
$items_presse = isset($items_presse) ? $items_presse : [];
?>
<div class="ce-news-search">
    <form action="" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="placeholder-text">Volltextsuche</label>
                    <input class="text-default form-control" placeholder="z.B.: Nachhaltigkeit" type="search"
                        required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="placeholder-text">kategorie</label>
                    <select class="form-select form-control" typp="select" required>
                        <option selected disabled value="">Alle</option>
                        <option>...</option>
                    </select>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="form-group">
                    <label>von</label>
                    <div class="form-datepicker">
                        <input autocomplete="off" data-placeholder="Format" placeholder="Datum"
                            class="datepicker-input only-month" type="text" name="tx_vdivcas_events[filter][startDate]"
                            value="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6" >
                <div class="form-group">
                    <label>bis</label>
                    <div class="form-datepicker">
                        <input autocomplete="off" data-placeholder="Format" placeholder="Datum"
                            class="datepicker-input" type="text" name="tx_vdivcas_events[filter][startDate]"
                            value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="search-bottom">
            <div class="form-group">
                <div class="buttons-section">
                    <button class="primary-button mr-26" type="submit">filter anwenden</button>
                    <button class="secondary-button" type="button"> Filter zurücksetzen</button>
                </div>
            </div>
            <div class="form-group checkbox-group">
                <div class="checkbox-section">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Pressemeldungen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Statements</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Marktdaten</label>
                    </div>
                </div>
            </div>
        </div>


    </form>
</div>