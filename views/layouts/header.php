<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="/templates/css/style.css">
  <link rel="stylesheet" href="/templates/css/popup.css">
  <!-- <link rel="stylesheet" href="CSS/font-awesome-4.7.0/css/font-awesome.min.css"> -->

  <title>commerce</title>
</head>
<body class=page>
  <header>
    <div id="header-inner">
        <a href="/" id="logo">Logo New
        </a>
        <nav>
          <a id="menu-icon" href=""></a>
          <ul>
              <li>
                  <a href="">Products</a>
              </li>
              <li>
                  <a href="">Accessories</a>
              </li>
              <li>
                  <a href="">About</a>
              </li>
              <li>
                  <a href="">Contact</a>
              </li>
              <?php if(User::isGuest()): ?>
              <li>
                  <a href="/user/register">Registration</a>
              </li>
              <li>
                  <a href="/user/login" class="isActive">Log In >>></a>
              </li>
                <?php else: ?>
              <li>
                  <a href="/user/logout" class="isActive">Log Out <<<</a>
              </li>
              <li>
                  <a href="/profile">Profile >>></a>
              </li>
              <?php endif;?>
          </ul>
        </nav>
    </div>
  </header>
<!---End Haeder-->