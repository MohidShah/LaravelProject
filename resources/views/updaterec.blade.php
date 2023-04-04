<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Update Records Page')
</head>
   <body>
   @extends('commonlayouts.header')
    
   @section('content')
   <div class="row" style="margin:10px;">
        <div class="col-md-3">
<br><br><br><br>
      <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
      
         <table>
            <tr>
               <td><strong>Name</strong></td>
               <td>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                     value = '<?php echo$users[0]->name; ?>'/>
               </td></tr><br/>
               <td><strong>Phone</strong></td>
               <td>
                  <input type="text" name="phone" class="form-control" id="name" placeholder="Your Phone"
                     value = '<?php echo$users[0]->phone; ?>'/>
               </td></tr><br/>
               <td><strong>Email</strong></td>
               <td>
               <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                     value = '<?php echo$users[0]->email; ?>'/>
               </td></tr><br/>
               <td><strong>Subject</strong></td>
               <td>
               <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                     value = '<?php echo$users[0]->subject; ?>'/>
               </td></tr><br/>
               <td><strong>Message</strong.</td>
               <td>
                
                  <input type="paragraph"textarea class="form-control" name="message" rows="5"  id="subject"placeholder="Type message...."
                     value = '<?php echo$users[0]->message; ?>'/>
               </td></tr><br/>
            </tr>
            <tr>
               <td colspan = '2'>
                  <button type="submit" class="btn btn-primary">Update Record</button>
               </td>
            </tr>
         </table>
      </form>
      <br><br><br><br>
      @endsection
   </body>
</html>