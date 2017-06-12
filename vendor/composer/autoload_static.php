<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita80f4c7cef9ec02367b8c014cfad9d40
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vis\\Voting\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vis\\Voting\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'CreateVotingAnswersTable' => __DIR__ . '/../..' . '/src/Migrations/2015_02_22_224923_create_voting_answers.php',
        'CreateVotingQuestionTable' => __DIR__ . '/../..' . '/src/Migrations/2015_02_22_224923_create_voting_questions.php',
        'CreateVotingQuestionUserTable' => __DIR__ . '/../..' . '/src/Migrations/2015_02_22_224923_create_voting_questions_user.php',
        'Vis\\Voting\\VotingAnswers' => __DIR__ . '/../..' . '/src/Models/VotingAnswers.php',
        'Vis\\Voting\\VotingControllers' => __DIR__ . '/../..' . '/src/Controllers/VotingControllers.php',
        'Vis\\Voting\\VotingQuestions' => __DIR__ . '/../..' . '/src/Models/VotingQuestions.php',
        'Vis\\Voting\\VotingQuestionsHandler' => __DIR__ . '/../..' . '/src/Models/VotingQuestionsHandler.php',
        'Vis\\Voting\\VotingQuestionsUser' => __DIR__ . '/../..' . '/src/Models/VotingQuestionsUser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita80f4c7cef9ec02367b8c014cfad9d40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita80f4c7cef9ec02367b8c014cfad9d40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita80f4c7cef9ec02367b8c014cfad9d40::$classMap;

        }, null, ClassLoader::class);
    }
}
