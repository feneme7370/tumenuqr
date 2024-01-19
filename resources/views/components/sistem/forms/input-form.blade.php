@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => '

block w-full 
text-sm form-input text-gray-900  bg-white rounded-lg shadow-md
my-1 p-2 

dark:border-gray-600
dark:focus:shadow-outline-gray
dark:text-gray-300
dark:bg-gray-700

focus:border-purple-400 
focus:outline-none  
focus:shadow-outline-purple 
focus:ring 
focus:ring-purple-950 
focus:ring-offset-0
']) !!}>