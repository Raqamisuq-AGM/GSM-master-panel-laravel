<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed" dir="ltr"
    data-theme="theme-default"
    data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1"
    data-framework="laravel" data-template="vertical-menu-theme-default-light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        @yield('title')
    </title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="rcCFW4L2PC94SoUDGLm8PbO1j3tAMXx2J8uBLwXM" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js",
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-5DDHKGP");
    </script> --}}
    <!-- End Google Tag Manager -->

    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/boxicons.css%3Fid=87122b3a3900320673311cebdeb618da.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/fontawesome.css%3Fid=a2997cb6a1c98cc3c85f4c99cdea95b5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/flag-icons.css%3Fid=121bcc3078c6c2f608037fb9ca8bce8d.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/rtl/core.css%3Fid=55b2a9dfaa009c41df62ca8d16e913a8.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/rtl/theme-default.css%3Fid=9182924a7b965439eca5e189ba43eba1.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css%3Fid=69dfc5e48fce5a4ff55ff7b593cdf93d.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css%3Fid=73d641bb8db2475ecafc6c68461ed01b.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css%3Fid=de339ead5e9c9e36f12e46cbef7aaffd.css') }}" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!-- beautify ignore:start -->
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <script>
        window.templateCustomizer = new TemplateCustomizer({
            cssPath: "",
            themesPath: "",
            defaultStyle: "light",
            defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
            displayCustomizer: "true",
            lang: "en",
            pathResolver: function(path) {
                var resolvedPaths = {
                    // Core stylesheets
                    "core.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8",
                    "core-dark.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6",

                    // Themes
                    "theme-default.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1",
                    "theme-default-dark.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80",
                    "theme-bordered.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9",
                    "theme-bordered-dark.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156",
                    "theme-semi-dark.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7",
                    "theme-semi-dark-dark.css": "https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51",
                };
                return resolvedPaths[path] || path;
            },
            controls: [
                "rtl",
                "style",
                "headerType",
                "contentLayout",
                "layoutCollapsed",
                "layoutNavbarOptions",
                "themes",
            ],
        });
    </script>

    @yield('style')
  </head>

  <body>
    <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    {{-- <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        @include('layouts.vendor.sidebar')

        <!-- Layout page -->
        <div class="layout-page">
          <!-- BEGIN: Navbar-->
            @include('layouts.vendor.header')
          <!-- END: Navbar-->

          <!-- Content wrapper -->
          <div class="content-wrapper">
                <!-- Content -->
                @yield('content')
                <!-- / Content -->

            <!-- Footer -->
            @include('layouts.vendor.footer')
            <!-- / Footer -->
          </div>
          <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->

    <!-- Include Scripts -->
    <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js%3Fid=0f7eb1f3a93e3e19e8505fd8c175925a') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js%3Fid=baf82d96b7771efbcc05c3b77135d24c') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js%3Fid=4648227467e3fd3f4cf976cfb0e43aea') }}"></script>
    <script
        src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js%3Fid=44b8e955848dc0c56597c09f6aebf89a') }}">
    </script>
    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js%3Fid=0a520e103384b609e3c9eb3b732d1be8') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js%3Fid=f6bda588c16867a6cc4158cb4ed37ec6') }}">
    </script>
    <script src="{{ asset('assets/vendor/js/menu.js%3Fid=c6ce30ded4234d0c4ca0fb5f2a2990d8') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('assets/js/main.js%3Fid=6bea3f2e092d5fe7327c226f3242f31b') }}"></script>

    <!-- END: Theme JS-->
    <!-- Pricing Modal JS-->
    <!-- END: Pricing Modal JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
    <!-- END: Page JS-->

    @yield('scripts')
  </body>
</html>
