<style>

.journal-icon {
            font-size: 90px;
            color: white;
        }
</style>

<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="">
    <i class="fas fa-newspaper journal-icon" ></i>

    </div>
    <div class=""><sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-13">
  
  <!-- Nav Item - Dashboard -->

  <li class="nav-item">
    <a class="nav-link text-white " href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <strong class="texte-gras">ACCEUIL</strong></a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="{{ route('test.create') }}">
    <i class="fas fa-plus"></i> <!-- Ajout d'une icône -->

      <strong class="texte-gras">CREER UN JOURNAL</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white " href="{{ route('test.index') }}">
    <i class="fas fa-list"></i> <!-- Ajout d'une icône -->

      <strong class="texte-gras">LISTER LES JOURNALS</strong></a>
  </li>
  <li class="nav-item">

  <a class="nav-link text-white" href="{{ route('logout') }}">
  <i class="fas fa-sign-out-alt"></i>
  <strong class="texte-gras">SE DECONNECTER</strong></a>
       </li>
       <li class="nav-item">

  <a class="nav-link text-white" href="{{ route('profil') }}">
  <i class="fas fa-user-circle profile-icon"></i>
  <strong class="texte-gras">Profil</strong></a>
       </li>
  
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>
