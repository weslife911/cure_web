<h1>
    Welcome to THE CURE FOUNDATION!  
</h1>

<p>
    Dear {{Auth::user()->name}}, 
</p> 

<p>
    Thank you for creating an account with "THE CURE FOUNDATION". We're thrilled to have you join our community dedicated to making a positive impact. Your support means the world to us, and together, we can drive meaningful change.  

    As a member, you'll receive updates on our initiatives, events, and opportunities to get involved. If you have any questions or need assistance, feel free to reach out to us at {{env("MAIL_USERNAME")}}.  

    Welcome aboard, and thank you for being part of THE CURE FOUNDATION!  
</p>

<p>
    Warm regards,  
    {{Auth::user()->name}} 
    THE CURE FOUNDATION Team
</p>

<x-footer.footer/>