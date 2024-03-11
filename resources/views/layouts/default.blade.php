<!DOCTYPE html>
<html lang="en">
{{-- header links start --}}
@include('layouts.includes.header_links')
{{-- header links end --}}

<body>

  <!-- ======= Header ======= -->
  @include('layouts.includes.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('layouts.includes.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        @yield('content')
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.includes.footer')

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('layouts.includes.footer_links')

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
