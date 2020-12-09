<nav>
        <ul class="nav luna-nav">
            <li class="nav-category">
                Accueil
            </li>
            <li class="active">
                <a href="/">Tableau de bord</a>
            </li>

            <li>
                <a href="{{route('habitation.index')}}">
                    Habitation<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
            <li class="nav-category">
                Questions
            </li>
            {{-- <li>
                <a href="{{route('type.index')}}">
                    Type<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li> --}}
            <li>
                <a href="{{route('categorie.index')}}">
                    Catégorie equipement<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
            <li>
                <a href="{{route('question.index')}}">
                    Liste<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
            <li>
                <a href="{{route('attribution.index')}}">
                    Attribution des questions<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
            <li>
                <a href="{{route('proposition.index')}}">
                    Propositions<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
            <li class="nav-category">
                Outputs
            </li>
            <li>
                <a href="{{route('output.index')}}">
                    Liste<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
            <li class="nav-category">
                Utilisateurs
            </li>
            <li>
                <a href="{{route('utilisateur.index')}}">
                    Liste<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
            <li>
                <a href="{{route('reponse.index')}}">
                    Réponses<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
            </li>
        </ul>
    </nav>