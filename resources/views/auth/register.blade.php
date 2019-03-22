@extends('layouts.app')

@section('content')
<b-container>
    
    <b-row align-h="center">
        
        <b-col cols="8">
            
            <b-card title="Registro" class="my-4">
            
           @if ($errors->any())  
             <b-alert show variant="danger">
               <ul class="mb-0">
                @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
                @endforeach 
               </ul>
             </b-alert>
           @else
               <b-alert show>
                 Porfavor ingresa tus datos
               </b-alert>     
           @endif  

              <b-form  method="POST" action="{{ route('register') }}">
                
                   @csrf
                
                <b-form-group label="Nombre" label-for="name">
                    
                        <b-form-input type="text"
                          id="name"
                          name="name"
                          value="{{ old('name') }}" required autofocus>
                        </b-form-input> 

                </b-form-group>


                <b-form-group label="Correo electronico:" label-for="email"
                    description="Nunca compartiremos tu correo. Estas seguro con nosotros.">

                        <b-form-input type="email"
                          id="email"
                          name="email"
                          value="{{ old('email') }}" required 
                          placeholder="example@programcionymas.com">
                        </b-form-input> 

                </b-form-group>

                  
                <b-form-group label="Contrasena" label-for="password">
                        
                        <b-form-input type="password"
                          id="password" 
                          name="password" required>
                       </b-form-input>

                </b-form-group>

                <b-form-group label="Confirmar contrasena" label-for="password-confirm">
                        
                        <b-form-input type="password"
                          id="password-confirm" name="password_confirmation" required>
                       </b-form-input>

                </b-form-group>

                        
                <b-button type="submit" variant="primary">
                        Confirmar registro
                </b-button>                  

                <b-button href="{{ route('login') }}" variant="link">
                    Ya te has registrado?
                </b-button>
            
            </b-form>
           

        </b-col>

    </b-row>
    
</b-container>

@endsection
