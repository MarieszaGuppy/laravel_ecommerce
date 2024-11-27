<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
        }

        .sidebar {
            width: 60px;
            background-color: #beffcc;
            height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            padding: 10px 0;
        }

        .sidebar-icons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .icon {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        header h1 {
            font-size: 24px;
        }

        .view-profile {
            color: #007bff;
            text-decoration: none;
        }

        .profile-form section {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .upload-box {
            border: 1px dashed #ccc;
            padding: 10px;
            text-align: center;
            color: #666;
        }

        input[type="file"] {
            display: none;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .cancel {
            background: #ccc;
            color: #333;
        }

        .save {
            background: #007bff;
            color: #fff;
        }

        .profile-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-info {
            display: flex;
            align-items: center;
        }

        .profile-picture {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .profile-info h1 {
            font-size: 1.5rem;
            margin: 0;
        }

        .linkedin-btn {
            background-color: #0a66c2;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .linkedin-btn:hover {
            background-color: #004182;
        }

        .profile-tabs {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .tab {
            background: none;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            color: #888;
            font-size: 1rem;
        }

        .tab.active {
            color: #000;
            font-weight: bold;
            border-bottom: 2px solid #000;
        }

        .profile-details {
            margin-top: 1.5rem;
        }

        .details-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .details-header h2 {
            font-size: 1.2rem;
            margin: 0;
        }

        .edit-btn {
            background-color: #4f46e5;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .edit-btn:hover {
            background-color: #3b35c3;
        }

        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 1rem;
        }

        .detail-item {
            display: flex;
            align-items: center;
            background-color: #f3f4f6;
            padding: 1rem;
            border-radius: 4px;
        }

        .detail-icon {
            font-size: 1.5rem;
            margin-right: 0.5rem;
            color: #4f46e5;
        }

        .detail-item p {
            margin: 0;
        }

        .detail-item strong {
            display: block;
        }

        .detail-item small {
            color: #888;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-icons">
            <button class="icon" onclick="location.href='{{ route('home') }}'"><i class='bx bxs-home'></i></button>
        </div>
    </div>
    <div class="main-content">
        <div class="profile-container">
            <div class="profile-header">
                <div class="profile-info">
                    <img class="profile-picture"
                        src="{{ $user->image ? asset('assets/profile/' . $user->image) : asset('assets/profile/user.png') }}"
                        alt="{{ $user->name }}'s Profile Picture">
                    <div>
                        <h1>{{ $user->name }}</h1>
                        <p>{{ $user->username }} &middot; {{ $user->email }}</p>
                    </div>
                </div>
            </div>

            <div class="profile-tabs">
                <button class="tab active">Overview</button>
                <button class="tab" onclick="location.href='{{ route('profile.edit') }}'">Edit Profile</button>
            </div>

            <div class="profile-details">
                <div class="details-header">
                    <h2>All Personal Informations</h2>
                    <button onclick="location.href='{{ route('profile.edit') }}'" class="edit-btn">Edit</button>
                </div>
                <div class="details-grid">
                    <div class="detail-item">
                        <span class="detail-icon"><i class='bx bxs-envelope'></i></span>
                        <p>
                            <strong>{{ $user->email }}</strong>
                            <br>
                            <small>Email Address</small>
                        </p>
                    </div>
                    <div class="detail-item">
                        <span class="detail-icon"><i class='bx bxs-lock-alt'></i></span>
                        <p>
                            <strong>Password is hidden</strong>
                            <br>
                            <small>For security reasons</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
