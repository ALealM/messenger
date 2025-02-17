@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesión">
                <b-alert show>Default Alert</b-alert>                
                <b-form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <b-form-group label="Correo electrónico:" label-for="email" description="Nunca compartiremos tu correo con alguien más.">
                        <b-form-input type="email" id="email" name="email"
                                      value="{{ old('email') }}" required autofocus
                                      placeholder="ejemplo@correo.com">                               
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Contraseña:" label-for="password">
                        <b-form-input type="password" id="password" name="password"
                                      value="{{ old('password') }}"required>                                
                        </b-form-input>
                    </b-form-group>                   
                    <b-form-group>                   
                        <b-form-checkbox name="remember" checked="{{ old('remember') ? 'true' : '' }}">
                            Recordar sesión
                        </b-form-checkbox>
                    </b-form-group>
                    <b-button type="submit" variant="primary">Ingresar </b-button>
                    <b-button href="{{ route('password.request') }}" variant="link">¿Olvidaste tu contraseña? </b-button>
                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
