<?php

use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('infos')->delete();
        
        \DB::table('infos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-12-29 15:44:51',
                'titre' => 'Mentions légales',
            'texte' => 'Le site internet www.grouille.fr est réalisé par  Muriel Guillou, Nathalie Leblanc et Christine Zedday&nbsp;<p>Ce site est celui de l\'association à but non lucratif (loi 1901): Grouille</p>
<p>Siret: 012345678910</p>
<p>Présidente: Lucie Guerzillon</p>
<p>Adresse: 26, rue des Coccinelles 56335 Montegrillon</p>
<p>
</p>
<p>Avoir un compte sur le site web n\'implique pas d\'être membre de l\'association Grouille et vice-versa. Le compte utilisateur permet de poster des recettes, et des commentaires sur les recettes.</p>
<p>
La responsable des contenus est Lucie Guerzillon... Euh, non en vrai ce site est un projet réalisé en formation Conception Développement Web à Buroscope (Cesson-Sévigné, Rennes 35). L\'association Grouille est fictive ainsi que Lucie Guerzillon (si il en existe une, j\'espère qu\'elle n\'est pas insectophobe). Vous pouvez-vous amuser à chercher Montegrillon dans un Atlas, tenez-moi au courant du résultat.
<br>
La responsable du contenu de ce clone est Christine Zedday, qui revendique ses actus pas piquées des hannetons.
</p>
contact: chrizedday@free.fr
<p>
<br>
</p>
<p>Hébergement:&nbsp;</p>
<p>Github, Inc.

<p>Siège social : San Francisco, Californie – USA.&nbsp;</p><br><br>
<p>&nbsp;Crédit illustrations : &nbsp;</p>
<p>
photos: <br>
James Wainscoat (Unsplash), nuée d\'insectes sur la page d\'accueil<br>
Brandon Phan (Pexel), mante religieuse page à propos<br>
Tania Malréchauffé (Unsplash), hôtel à insectes page à propos<br>
Clément Falize, demoiselles de la page insectes<br>
Sergio Arze, John Hoang, Salmen Bejaoui pour les recettes (Unsplash)<br>

dessins: <br>
Adrianna Watujo (MixKit), la jeune fille aux lucioles page à propos<br>
Emma Chavez (MixKit), le chef de la page recettes<br>
Pixabay, DomainPublicVector et OpenClipart pour les insectes, sauf les vers de farine: illustration de Des Helmore, collection Manaaki Whenua - Landcare research, NZ, license https://creativecommons.org<br>',
                'email' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => '2019-12-26 18:35:54',
                'titre' => 'L\'association Grouille',
                'texte' => 'L\'association "Grouille" a été fondée en 2012 par un collectif de personnes, aimant les insectes et se sentant très concernées par la préservation des ressources naturelles de notre planète.
Faisant face à une prochaine crise alimentaire que nos dirigeants estiment arriver d’ici à l’horizon 2030, il devient urgent d\'envisager de s\'alimenter autrement.
Les insectes sont là à notre portée, pourquoi ne pas en profiter ? Découvrez dans notre page "Insectes" les insectes comestibles et apprenez à les reconnaître.',
                'email' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => '2019-12-26 18:43:44',
                'titre' => 'Les insectes sont nos amis',
                'texte' => 'Dans notre association, nous aimons les insectes y compris dans notre assiette. L\'objectif de notre association est de promouvoir les insectes souvent mal connus ou mal aimés.<br>
Ces derniers sont généralement considérés comme des animaux nuisibles qu\'on cherche à éliminer par tous les moyens et notamment en utilisant des pesticides.
Mais beaucoup d\'insectes sont comestibles et très riches en protéines. Ce serait dommage de ne pas en profiter. Nous vous proposons sur ce site des recettes à base d\'insectes faciles à préparer.
<br>Songez que les insectes sont les plus proches cousins des crustacés! Vous ne boudez pas sur un homard ou une assiette de langoustines, quand même!<br>
Et ensuite, vous ne direz plus jamais: "Quand je vois un six-pattes, je sors mon six-coups"!',
                'email' => 'NULL',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'titre' => 'e-mail Asso',
                'texte' => NULL,
                'email' => 'webmaster@grouille.fr',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => '2019-12-26 18:31:45',
                'titre' => 'Politique de confidentialité',
                'texte' => 'Les données à caractère personnel collectées sur le site www.grouille.fr sont les suivantes :

Prénom – Nom - Adresse de messagerie – Téléphone&nbsp;<br>par le formulaire de contact<p>
<br>
Prénom ou Nom ou Pseudo et Adresse de messagerie <br>par le formulaire d\'inscription<p>
</p>
<p>Les recettes et les commentaires postés sur ce site ne sont pas considérés comme des données personnelles et deviennent la propriété du site un fois qu\'elles ont été postées. Quand le compte d\'un membre est supprimé, à sa demande ou après 3 ans d\'inactivité, ses recettes et ses commentaires sont anonymisés en vertu de la loi "droit à l\'oubli". 

Ces données sont collectées lorsque l’utilisateur adhère à l\'association via le formulaire de création de compte ou effectue une demande de contact via le formulaire, « Demande de contact » Le responsable du traitement conserve dans ses systèmes informatiques du site et dans des conditions raisonnables de sécurité ces données collectées pour une durée de : 3 ans.&nbsp;</p>
<p>
<br>
</p>
<p>&nbsp;La collecte et le traitement des données répondent aux finalités suivantes :

- Créer un compte et contacter le visiteur

Les données à caractère personnel ne sont transmises à aucun tiers, et ne sont traitées que par les administrateurs du site

Le responsable du traitement des données est : Lucie Guerzillon Elle peut être contactée par e-mail à contact@grouille.fr&nbsp;</p>
<p>
<br>
</p>',
                'email' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'titre' => 'e-mail Asso',
                'texte' => NULL,
                'email' => 'contact@grouille.fr',
            ),
        ));
        
        
    }
}