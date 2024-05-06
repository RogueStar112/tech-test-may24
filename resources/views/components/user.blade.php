<div class="flex flex-col p-4 bg-white max-w-sm rounded-lg">
    
  <div class="profile">

    <div class="profile-picture mx-auto text-center">
        <img class="mx-auto" src="{{ asset("$pfp")}}" alt="">
    </div>

    <div class="profile-full-name mx-auto text-center">
        {{$name}}
    </div>

  </div>  

  <div class="details">

    <div class="school-details flex flex-col">

        <div>

            <div>
            <i class="fa-solid fa-school"></i>
            Gerhold, Hegmann and Nienow
            </div>
        
        </div>

        <div class="flex flex-start">
            <div class="flex gap-2 flex-start grow">
                <i class="fa-solid fa-people-group"></i>
                <div>Year 2B</div>
            </div>

            <div class="flex gap-2  flex-start grow">
                <i class="fa-solid fa-graduation-cap"></i>
                <div>Teal</div>
            </div>

        </div>


    </div>

    <div class="flex gap-3 text-center [&>*]:rounded-lg [&>*]:border-2 [&>*]:border-gray-400">

        <div class="bg-gray-200 grow">
            <p class="text-lg">2 of 4<p>
            <p>Completed<br>Activities</p>
        </div>


        <div class="bg-gray-200 grow">
            <p class="text-lg">3 of 8<p>
            <p>Completed<br>Targets</p>
        </div>
    </div>

     <div class="flex gap-3 text-center [&>*]:rounded-lg [&>*]:border-2 [&>*]:border-gray-400 mt-2">
       <div class="bg-pink-500 hover:bg-pink-800 text-white p-4 grow">View Profile</div>

       <div class="bg-pink-500 hover:bg-pink-800 text-white p-4"><i class="fa-regular fa-comment"></i></div>
     </div>


  </div>

</div>