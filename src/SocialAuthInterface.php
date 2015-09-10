<?php
/**
 * @author: Sohel Rana
 * @email: me.sohelrana@gmail.com
 * @uri: http://sohelrana.me
 * @tags: social login, php social login, login with facebook, login with twitter, login with google. login with
 * linkedin
 */


namespace SocialAuth;

interface SocialAuthInterface {

    public function getLoginUrl($callbackUrl);

    public function getUser();

    public function getLogoutUrl();

}