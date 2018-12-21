<?php 

    require_once('./model/User.php');    
    require_once('./repository/UserRepository.php');
    require_once('./model/Pet.php');    
    require_once('./repository/PetRepository.php');
    require_once('./config/dbConnection.php');
    require_once('./normalizer/UserNormalizer.php');
    require_once('./normalizer/PetNormalizer.php');
    require_once('./normalizer/NormalizerInterface.php');

    require_once('./exceptions/PetNotFoundException.php');
    require_once('./exceptions/UserNotFoundException.php');
    require_once('./exceptions/DatabaseError.php');
