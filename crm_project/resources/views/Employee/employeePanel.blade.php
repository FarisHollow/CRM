

 


<h1>Employee page</h1>


<li class="sidebar-item">
    <a class="sidebar-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false">
      <span>
        <i class="ti ti-login"></i>
      </span>
      <span class="hide-menu">Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
      @csrf
  </form>
  </li>