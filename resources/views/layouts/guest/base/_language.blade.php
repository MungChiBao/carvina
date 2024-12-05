@if(app()->getLocale()=="vi")
<div class="switch-lang">
    <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Vietnam.png" />
        <p class="lang-text"> <i style="font-size: 15px;" class="fa  fa-angle-down"></i></p>
    </div>
    <div class="lang-dropdown">
        <div class="selecting-lang">
        <a href="{{ url('locale/en') }}"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png" />
            <p class="lang-text"></p></a>
        </div>
    </div>
</div>
@elseif(app()->getLocale()=="en")
<div class="switch-lang">
    <div class="current-lang"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png" />
        <p class="lang-text"> <i style="font-size: 15px;" class="fa  fa-angle-down"></i></p>
    </div>
    <div class="lang-dropdown">
        <div class="selecting-lang"><a href="{{ url('locale/vi') }}"><img class="lang-flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/256/Flag_of_Vietnam.png" />
            <p class="lang-text"></p></a>
        </div>
    </div>
</div>
@endif
