<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Alert</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f8f9fa; padding:30px;">

<div style="max-width:600px; margin:auto; background:#ffffff; padding:30px; border-radius:8px;">

    {{-- <h2 style="color:#1E3A8A;">Hi {{ $user->name }},</h2> --}}

    <p>
        We noticed a successful login to your HiStudy account.
    </p>

    <p>
        {{-- <strong>Date:</strong> {{ now()->format('F d, Y h:i A') }} <br> --}}
        {{-- <strong>IP Address:</strong> {{ request()->ip() }} --}}
    </p>

    <p>
        If this was you, no further action is required.
    </p>

    <p>
        If you did not perform this login, we recommend changing your password immediately.
    </p>

    <hr>

    <p style="font-size:13px; color:#6c757d;">
        {{-- © {{ date('Y') }} HiStudy. All rights reserved. --}}
    </p>

</div>

</body>
</html>
