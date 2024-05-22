<div class="card mb-0 ">
    Redirecting to login
</div>
<script>
    localStorage.removeItem("auth_token");
    window.location.href = "{{route('get.login')}}" ;
</script>