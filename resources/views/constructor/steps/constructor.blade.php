@section('constructor')
        <div class="constructor-area">
            <div class="title-block">
                <div class="title">
                    <h2>Kreator układu gwiaździstego</h2>
                </div>
                <div class="description-block">
                    <p><b>Odtwórz gwiazdy</b>, które rozświetliły niebo w wyjątkowej chwili.<br>
                        Spersonalizuj mapę rozgwieżdżonego nieba <b>i zapisz wspomnienia na zawsze.</b></p>
                </div>
            </div>
            <div class="constructor-block">
                <div class="constructor">
                    <div class="stage choosen">
                        <div class="title-block">
                            <div class="title">
                                <p><span>I</span></p>
                                <p>krok</p>
                            </div>
                        </div>
                        <div class="work-area">
                            <div class="template-area">
                                @foreach($presets as $preset)
                                <div class="template {{ ($loop->index == 0) ? 'active' : ''}}" data-id="{{ $preset->id }}" data-space-width="{{ $preset->space_width }}" data-space-height="{{ $preset->space_height }}" data-space-radius="{{ $preset->space_radius }}" data-space-top="{{ $preset->space_top }}" data-space-negative="{{ $preset->space_negative }}" data-title-top="{{ $preset->title_top }}" data-description-top="{{ $preset->description_top }}" data-compass="{{ $preset->compass }}" data-frame="{{ $preset->frame }}" data-text-color="{{ $preset->text_color }}" data-background-color="{{ $preset->background_color }}">
                                    <img src="{{ asset('img/templates/presets/preset_' . $preset->id . '.png') }}" alt="template image">
                                </div>
                                @endforeach           
                            </div>
                        </div>
                        <div class="navbar-area">
                            <div></div>
                            <div class="purple-button next">
                                <p>Dalej</p>
                                <img src="{{ asset('img/arrow1.svg') }}" alt="white arrow">
                            </div>
                        </div>
                    </div>
                    <div class="stage">
                        <div class="title-block">
                            <div class="title">
                                <p><span>II</span></p>
                                <p>krok</p>
                            </div>
                        </div>
                        <div class="work-area">
                            <div class="form-block">
                                <form>
                                    <div class="input">
                                        <input id="city" type="text" required autocomplete="off">
                                        <label for="city">Miejsce wydarzenia</label>
                                        <span class="bar"></span>
                                    </div>
                                    <div class="input">
                                        <input id="text" type="text" maxlength="80" required autocomplete="off">
                                        <label for="text">Twój tekst</label>
                                        <span class="bar"></span>
                                    </div>
                                    <div class="example example-btn">
                                        <img src="{{ asset('img/info.svg') }}" alt="info icon">
                                        <p>Przykłady</p>
                                    </div>
                                    <label class="switch" for="milky-way">
                                        <input type="checkbox" id="milky-way">
                                        <div class="slider"></div>
                                        <p>Droga Mleczna</p>
                                    </label>
                                    <label class="switch" for="planets">
                                        <input type="checkbox" id="planets">
                                        <div class="slider"></div>
                                        <p>Oznacz planety i jasne gwiazdy</p>
                                    </label>
                                    <label class="switch" for="lines">
                                        <input type="checkbox" id="lines">
                                        <div class="slider"></div>
                                        <p>Narysuj linie gwiazdozbiorów</p>
                                    </label>
                                    <label class="switch disabled" for="constellations">
                                        <input type="checkbox" disabled id="constellations">
                                        <div class="slider"></div>
                                        <p>Oznacz gwiazdozbiory</p>
                                    </label>
                                    <label class="switch" for="frame">
                                        <input type="checkbox" id="frame">
                                        <div class="slider"></div>
                                        <p>Dodaj obramowanie</p>
                                    </label>
                                    <label class="switch" for="compass">
                                        <input type="checkbox" checked id="compass">
                                        <div class="slider"></div>
                                        <p>Kompas</p>
                                    </label>
                                </form>
                                <div class="example-area">
                                    <div class="example-block">
                                        @foreach($examples as $example)
                                        <div class="example">
                                            <div class="title">
                                                <p>{{ $example->name }}</p>
                                            </div>
                                            <div class="text-area">
                                                @foreach($example->examples as $text)
                                                <div class="text">
                                                    <p>{{ $text->text }}</p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="close-block">
                                            <div class="close example-btn">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="calendar-block">
                                    <div type="text" class="datepicker-here" data-timepicker="true"></div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-area">
                            <div class="purple-button prev">
                                <img src="{{ asset('img/arrow1.svg') }}" alt="white arrow">
                                <p>Wróć</p>
                            </div>
                            <div class="purple-button next">
                                <p>Dalej</p>
                                <img src="{{ asset('img/arrow1.svg') }}" alt="white arrow">
                            </div>
                        </div>
                    </div>
                    <div class="stage">
                        <div class="title-block">
                            <div class="title">
                                <p><span>III</span></p>
                                <p>krok</p>
                            </div>
                        </div>
                        <div class="work-area">
                            <div class="size-area">
                                <div class="title-block">
                                    <div class="title">
                                        <h5>Rozmiar</h5>
                                    </div>
                                </div>
                                <div class="size-block">
                                    @foreach($sizes as $size)
                                    <div class="size {{ ($loop->index == 0) ? 'active' : ''}}" data-price="{{ $size->price }}">
                                        <div class="description-block">
                                            <p>{{ $size->name }}</p>
                                        </div>
                                        <div class="price-block">
                                            <p>{{ $size->price }} zł</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="accessory-area">
                                <div class="title-block">
                                    <div class="title">
                                        <h5>Dodatki</h5>
                                    </div>
                                </div>
                                <div class="accessory-block">
                                    @foreach($accessories as $accessory)
                                    <div class="accessory" data-price="{{ $accessory->price }}">
                                        <div class="image-block">
                                            <img src="{{ asset('img/accessory/accessory_' . $accessory->id . '.png') }}" alt="accessory">
                                        </div>
                                        <div class="description-block">
                                            <p>{{ $accessory->name }}</p>
                                        </div>
                                        <div class="price-block">
                                            <p>{{ $accessory->price }} zł</p>
                                        </div>
                                    </div>
                                    @endforeach  
                                </div>
                            </div>
                        </div>
                        <div class="navbar-area">
                            <div class="purple-button prev">
                                <img src="{{ asset('img/arrow1.svg') }}" alt="white arrow">
                                <p>Wróć</p>
                            </div>
                            <div class="price-block">
                                <div class="price">
                                    <p>Łączny koszt: <b></b></p>
                                </div>
                                <div id="order" class="purple-button">
                                    <p>Przejdź do zapłaty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="result-block">
                    <div class="sky-block">
                        <div class="content">
                            <div id="starmap"></div>
                            <div class="compass"></div>
                            <div class="frame"></div>
                            <div class="title">
                                <p>Twój tekst</p>
                            </div>
                            <div class="description">
                                <p id="city"><span id="location"></span>, <span id="coord_lat"></span> <span id="coord_lng"></p>
                                <p id="datetime"></p>
                            </div>
                        </div>                
                        <img class="background" src="" alt="template">
                    </div>
                </div>
            </div>
        </div>
@endsection