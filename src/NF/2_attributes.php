<?php

namespace annotations {
    class SecurityController
    {
        /**
         * @Route("/login", name="login_action")
         */
        public function loginAction()
        {
            // ...
        }
    }
}

// => will change to
namespace attributes {
    class SomeController
    {
        #[Route('/path', name: 'login_action')]
        public function someAction()
        {
            // ...
        }
    }

}
