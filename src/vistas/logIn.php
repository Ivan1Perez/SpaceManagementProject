<body class="bg-login-gradient">

<div class="flex min-h-[100vh] flex-col justify-center px-6 py-12 lg:px-8">

  <div class="sm:mx-auto sm:w-full sm:max-w-sm md:max-w-lg xl:max-w-[42rem]">

    <img class="mx-auto h-20 w-auto md:h-40 xl:h-[4rem]" src="../img/spaceManagementLogo.png" alt="Company logo">

    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-300
    md:text-5xl xl:text-[4xl]">
      Inicia sesión con tu cuenta
    </h2>

  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm md:max-w-lg xl:max-w-[42rem]">

    <form class="space-y-6" id="myForm">

      <div>

        <label for="email" class="block text-sm font-medium leading-6 text-gray-300 md:text-2xl xl:text-[2rem]">Dirección email</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required
          class="logIn-input">
        </div>

      </div>

      <div>

        <div class="flex items-center justify-between">

          <label for="password" class="block text-sm font-medium leading-6 text-gray-300 md:text-2xl xl:text-[2rem]">Contraseña</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-sky-400 hover:text-indigo-500 md:text-xl xl:text-2xl ">¿Olvidó la contraseña?</a>
          </div>

        </div>

        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required
          class="logIn-input">
        </div>

      </div>

      <div>
        <button type="submit" class="signIn-button">Iniciar sesión</button>
      </div>

    </form>

    <p class="mt-10 text-center text-sm text-gray-400 md:text-lg xl:text-2xl">
      ¿Volver a inicio?
      <a href="#" class="font-semibold leading-6 text-sky-400 hover:text-indigo-500 underline-offset-1 c-unerline">Clica aquí</a>
    </p>

  </div>

</div>
