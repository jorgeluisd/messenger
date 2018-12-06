@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <b-card title="Inicio de sesión">
                    <b-alert variant="success" show>Por favor ingresa tus datos</b-alert>

                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <b-form-group
                                label="Correo electronico:"
                                label-for="email"
                                description="Nunca compartiremos tu correo con nadie.">
                            <b-form-input type="email" 
                                id="email" name="email"
                                value="{{ old('email') }}" required autofocus
                                placeholder="Ingrese aqui tu correo">
                            </b-form-input>
                        </b-form-group>

                        <b-form-group label="Contraseña:" label-for="password">
                            <b-form-input type="password"
                                id="password" name="password"
                                value="{{ old('password') }}" required>
                            </b-form-input>
                        </b-form-group>

                        <!--
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    -->

                        <b-form-group>
                            <b-form-checkbox name="remember" id="remember"
                                {{ old('remember') ? 'checked="true"' : '' }}>
                                Recordar sesión
                            </b-form-checkbox>
                        </b-form-group>
                        
                        <b-button type="submit" variant="primary">
                            Ingresar
                        </b-button>

                        <b-button href="{{ route('password.request') }}" variant="link">
                            ¿Olvidaste tu contraseña?
                        </b-button>

                        <!--
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href=>
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        -->
                    </b-form>

                </b-card>


                <div class="card-body">
                    
                </div>
            </div>
        </b-col>
    </b-row>
</b-container>
@endsection
