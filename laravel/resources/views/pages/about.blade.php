
  <x-hoa-layout>
{{-- Hero “À propos” --}}
<x-slot name="hero">
  <x-hoa-hero image-url="{{ asset('/images/hero-placeholder.png') }}">
  <h1 class="font-diazo text-4xl text-white drop-shadow-lg">
    Construisons ensemble l'agriculture de demain
  </h1>
  <p class="text-xl text-white max-w-xl mx-auto my-4 drop-shadow">
    Découvrez comment nos membres font émerger l’agroécologie, une histoire à la fois.
  </p>
  <x-hoa-button url="{{ route('about') }}">Découvrir HoA</x-hoa-button>
</x-hoa-hero>
</x-slot>


  <section class="bg-gray-50 py-16">
    <div class="max-w-3xl mx-auto text-center px-4 sm:px-6 lg:px-8">
      <h1 class="font-diazo text-5xl text-hoa-green mb-4">À propos</h1>
      <p class="text-gray-700 text-lg leading-relaxed">
        Découvrez la mission, la vision et les valeurs qui animent <strong>The House of Agroecology</strong> et font de ce projet un véritable moteur de transition agroécologique.
      </p>
    </div>
  </section>



  <div>
  <section class="mb-16">
  <h2 class="text-center text-3xl font-diazo text-hoa-green mb-6">
    Titre de section
  </h2>
  <p class="text-center max-w-2xl mx-auto text-gray-600">
    Paragraphe d’intro aéré et lisible, comme sur Ilesdepaix.
  </p>
</section>

    <x-hoa-feature
      title="Un défi culturel"
      text="changer le regard sur l’agriculture en valorisant les métiers agricoles et en promouvant
     une nouvelle vision"
      image="{{ asset('images/défis/défi-culturel.png') }}"
      url="#" />
    <x-hoa-feature
      title="Un défi collaboratif"
      text="changer le regard sur l’agriculture en valorisant les métiers agricoles et en promouvant
    une nouvelle vision"
      image="{{ asset('images/défis/défi-solidaire.png') }}"
      url="#"
      reverse="true" />
    <x-hoa-feature
      title="Un défi solidaire"
      text="Faire preuve de solidarité car la réussite de la transition dépend de
    l'éentraide"
      image="{{ asset('images/défis/défi-collaboratif.png') }}"
      url="#" />

    <h2>Face à ces défis, HoA s’affirme comme un *tiers de confiance*
      de la transition agroécologique en Belgique
      – un point de convergence où chacun peut trouver support,
      expertise et partenaires pour avancer ensemble.
    </h2>
  </div>
</x-hoa-layout>

{{-- resources/views/pages/about.blade.php --}}
<x-hoa-layout>
  {{-- Hero “À propos” --}}
  <section class="bg-gray-50 py-16">
    <div class="max-w-3xl mx-auto text-center px-4 sm:px-6 lg:px-8">
      <h1 class="font-diazo text-5xl text-hoa-green mb-4">À propos</h1>
      <p class="text-gray-700 text-lg leading-relaxed">
        Découvrez la mission, la vision et les valeurs qui animent <strong>The House of Agroecology</strong> et font de ce projet un véritable moteur de transition agroécologique.
      </p>
    </div>
  </section>

  {{-- Notre mission --}}
  <section class="py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-sourcecode text-3xl text-hoa-green mb-6">Notre mission</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        <em>« L’union fait la vie »</em> incarne l’esprit de <strong>The House of Agroecology</strong>. Notre mission est d’<strong>accélérer la transition agroécologique en Belgique</strong> en rassemblant et fédérant tous les acteurs de la chaîne agroalimentaire dans une approche collaborative.
      </p>
      <p class="text-gray-700 leading-relaxed">
        HoA agit comme un catalyseur : communication unifiée, bases scientifiques validées, outils mutualisés et lieu d’échange pour tous. En renforçant la crédibilité et la portée du secteur, nous créons une dynamique positive de changement.
      </p>
    </div>
  </section>

  {{-- Notre vision --}}
  <section class="bg-gray-50 py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-sourcecode text-3xl text-hoa-green mb-6">Notre vision</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        Nous aspirons à une <strong>transition harmonieuse, inclusive et co-construite</strong>. Aucun acteur ne peut réussir seul : agriculteurs, chercheurs, industries, distributeurs et consommateurs sont interdépendants.
      </p>
      <p class="text-gray-700 leading-relaxed">
        Plutôt que d’imposer une vision unique, HoA fournit un terrain neutre et des outils communs pour encourager la coopération malgré la diversité des points de vue.
      </p>
    </div>
  </section>

  {{-- Nos valeurs --}}
  <section class="py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-sourcecode text-3xl text-hoa-green mb-6">Nos valeurs</h2>
      
      <h3 class="font-sourcecode text-2xl text-gray-800 mb-2">Valeurs humaines</h3>
      <ul class="list-disc list-inside text-gray-700 mb-6 space-y-1">
        <li><strong>Ouverture</strong> : accueillir de nouvelles idées et partenariats</li>
        <li><strong>Responsabilité</strong> : agir pour l’intérêt commun, sans égo</li>
        <li><strong>Engagement</strong> : servir agriculteurs, citoyens et planète</li>
        <li><strong>Solidarité</strong> : accompagner chaque maillon de la filière</li>
      </ul>

      <h3 class="font-sourcecode text-2xl text-gray-800 mb-2">Valeurs vis-à-vis de la Nature</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li><strong>Coopération</strong> avec les écosystèmes</li>
        <li><strong>Humilité</strong> face à la complexité du vivant</li>
        <li><strong>Émerveillement</strong> pour la beauté de la biodiversité</li>
        <li><strong>Restauration</strong> des sols et des équilibres fonctionnels</li>
      </ul>
    </div>
  </section>

  {{-- Notre démarche & ambition --}}
  <section class="bg-gray-50 py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="font-sourcecode text-3xl text-hoa-green mb-6">Notre démarche et ambition</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        HoA facilite et initie des projets concrets : 
        <ul class="list-disc list-inside space-y-1 mt-2">
          <li><strong>Connecter les acteurs</strong> pour créer des synergies.</li>
          <li><strong>Consolider un hub d’expertise</strong> autour des innovations agroécologiques.</li>
          <li><strong>Informer et sensibiliser</strong> le grand public et les professionnels.</li>
        </ul>
      </p>
      <p class="text-gray-700 leading-relaxed">
        Nos objectifs : promouvoir une alimentation saine, assurer l’inventivité des agriculteurs, stimuler la coopération, et diffuser largement les savoirs en agroécologie pour construire ensemble un modèle agricole résilient.
      </p>
    </div>
  </section>

  {{-- Call-to-action final --}}
  <section class="py-16 text-center">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
      <p class="font-semibold text-2xl text-gray-800 mb-6">
        Vous partagez notre vision ? <strong>Rejoignez-nous</strong> en adhérant à HoA ou devenez partenaire pour porter plus loin notre mission.
      </p>
      <a href="{{ route('register') }}"
         class="inline-block bg-hoa-green text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600">
        Adhérez dès maintenant
      </a>
    </div>
  </section>

  {{-- Bas de page navigation --}}
  <div class="mt-12 flex justify-center space-x-8 text-hoa-yellow text-lg font-semibold">
    <a href="{{ route('home') }}" class="hover:underline">Accueil</a>
    <a href="{{ route('partager') }}" class="hover:underline">Partager</a>
    <a href="{{ route('apprendre') }}" class="hover:underline">Apprendre</a>
    <a href="{{ route('s-informer') }}" class="hover:underline">S’informer</a>
  </div>
</x-hoa-layout>
