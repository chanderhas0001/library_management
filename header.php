<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 250px;
      background-color: #343a40;
    }

    .sidebar-brand {
      padding: 1rem;
      color: #fff;
      font-size: 1.5rem;
    }

    .sidebar-nav {
      padding-top: 1rem;
    }

    .sidebar-nav .nav-link {
      color: #fff;
    }

    .content {
      margin-left: 250px;
      padding: 2rem;
    }

    .required {
      color: red;
    }

    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>

</head>

<body>
  <!-- Sidebar -->  
  <div class="sidebar">
    <div class="sidebar-brand">Dashboard</div>
    <ul class="nav flex-column sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="subend.php"><i class="fas fa-question"></i>Subscription Ended</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="subendnotification.php"><i class="fas fa-question"></i>Subscription End Comming</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link" href="subscription.php"><i class="fas fa-question"></i>Subscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="unsubscribed.php"><i class="fas fa-question"></i>Unsubscribed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="seat_status.php"><i class="fas fa-question"></i>Seat Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="enquiry.php"><i class="fas fa-question"></i> Add Enquiry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="showenquiry.php"><i class="fas fa-question"></i> Show Enquiry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admission.php"><i class="fas fa-book-reader"></i> New Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="showadmission.php"><i class="fas fa-book-reader"></i> Show Admission</a>
      </li>
  

      <li class="nav-item">
        <a class="nav-link" href="logout.php?logout='true'"><i class="fas fa-cogs"></i>Logout</a>
      </li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Messages</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>