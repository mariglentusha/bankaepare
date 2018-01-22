<aside class="main-sidebar" style="height: 100%;">
    <section class="sidebar" style="height: 100%;">

        <div class="input-group sidebar-form">
            <div id="master" class="search" style="float: right;" style="background-color: red">
                <ais-index
                        app-id="F78VLW5SI5"
                        api-key="e63d143ac1b993895c1cfebd075bec76"
                        index-name="subjects"

                >
                    <ais-search-box placeholder="Kerko..."></ais-search-box>

                    <ais-results-per-page-selector :options="['1', 6]"></ais-results-per-page-selector>
                    <div class="results">
                        <ais-results>

                            <template slot-scope="{ result }">
                                <h5><div class="a">
                                        <a :href="/subjects/+result.id" style="color: green">


                                            @{{result.name}}

                                        </a></div>
                                </h5>
                            </template><ais-rating attribute-name="rating"></ais-rating>
                        </ais-results>
                        <ais-results><ais-rating__item--active></ais-rating__item--active>
                            <ais-stats></ais-stats>
                            <ais-powered-by></ais-powered-by>

                        </ais-results>
                    </div>

                </ais-index></div>
        </div>

        @if((Request::is('subjects/*') || Request::is('exams/*')) && isset($subjects))
            <ul class="sidebar-menu" data-widget="tree" style="overflow-y: scroll; height: 100%;">
                @foreach($subjects as $subject)
                    <li><a href="/subjects/{{ $subject->id }}"><span>{{ $subject->name }}</span></a></li>
                @endforeach
            </ul>
        @elseif(Request::is('degrees/*') && isset($degrees))
            <ul class="sidebar-menu" data-widget="tree">
                @foreach($degrees as $degree)
                    <li><a href="/degrees/{{ $degree->id }}"><span>{{ $degree->name }}</span></a></li>
                @endforeach
            </ul>
        @elseif(Request::is('faculties/*') || isset($faculties))
            <ul class="sidebar-menu" data-widget="tree" id="sidebarElements">
                @foreach($faculties as $faculty)
                    <li><a href="/faculties/{{ $faculty->id }}"><span>{{ $faculty->name }}</span></a></li>
                @endforeach
            </ul>
        @endif

    </section>
</aside>
<style type="text/css">


    .search{

        background-color:#606C574A ;

    }
    input[type=search] {
        width: 30%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        color: white;
        background-color: #69818535;
        background-image: url('search.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }
    .ais-results-per-page-selector{

        color:blue;
    }
    .ais-stats{

        color: white;
    }
    .ais-powered-by{
        color: white;
    }
    input[type=search]:focus {
        width: 100%;
    }
    .ais-clear{
        background-color: #13AEC735;
        border: none;
        color: red;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        width: 10%;
    }
    .ais-search-box__submit{

        background-color: #13AEC735;
        border: none;
        color: red;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        width: 10%;
        cursor: pointer;
    }
    .a:link {
        background-color: yellow;
    }

    .a:visited {
        background-color: cyan;
    }

    .a:hover {
        background-color: lightgreen;
    }

    .a:active {
        background-color: hotpink;
    }



</style>
