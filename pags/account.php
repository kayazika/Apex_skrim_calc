 <?php 
 include('lib/login_verify_acc.php')
 ?>
    <main>
        <section class="box-section">
            <form method="POST" action="lib/login.php"  class="box-form">
                <h1 class="box-item-form" >Login</h1><br>
                <label class="box-item-form" for="username">Username</label><br>
                <input class="box-item-form" name="user" type="text"><br><br>
                <label class="box-item-form" for="password">Password</label><br>
                <input class="box-item-form" name="pass" type="password"><br><br>
                <button type="input">Login</button>
            </form>
        </section>

    </main>
    