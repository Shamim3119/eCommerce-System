 <nav class="nav" id="navMenu">
      <a href="#" class="active">Home</a>
      @foreach($navigations as $navigation)
         <a href="#{{ $navigation->slug }}">{{ $navigation->title }}</a>
      @endforeach
      <a href="https://portal.dreamvalleyint.com/" class="login-btn" style="color: #ffffff;">
          <span style="filter: brightness(0) invert(1); display: inline-block;">👤</span> Login
      </a>
  </nav>