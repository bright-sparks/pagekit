<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <p>@trans('Hello %name%', ['%name%' => user.name]),</p>

        <p>@trans('Thank you for registering at %site%! Your account has been successfully created and must be verified before you can use it.', ['%site%' => app.option.get('system:app.site_title')])</p>

        <p>@trans('To verify the account click on:')</p>

        @set(link = url.route('@system/registration/activate', ['user' => user.username, 'key' => user.activation], true))
        <p><a target="_blank" href="@link">@link</a></p>

        <p>@trans('After verification an administrator will be notified to activate your account. You\'ll receive a confirmation email when it\'s done.')</p>

    </body>
</html>