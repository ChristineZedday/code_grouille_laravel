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
                'updated_at' => '2019-12-26 12:02:07',
                'titre' => 'Mentions légales',
            'texte' => 'Le site internet www.grouille.fr est réalisé par Christine, Nathalie et Muriel&nbsp;<p>Ce site est celui de l\'association à but non lucratif (loi 1901): Grouille</p>
<p>Siret: 012345678910</p>
<p>Présidente: Lucie Guerzillon</p>
<p>Adresse: 26, rue des Coccinelles 56335 Montegrillon</p>
<p>
<br>
</p>
<p>Avoir un compte sur le site web n\'implique pas d\'être membre de l\'association Grouille et vice-versa. Le compte utilisateur permet de poster des recettes, et des commentaires sur les recettes.</p>
<p>
<br>
</p>
<p>
<br>
</p>
<p>Hébergement&nbsp;</p>
<p>OVH
SAS au capital de 10 000 000 €&nbsp;</p>
<p>&nbsp;RCS Roubaix – Tourcoing 424 761 419 00045&nbsp;</p>
<p>Code APE 6202A
N° TVA : FR 22 424 761 419&nbsp;</p>
<p>Siège social : 2 rue Kellermann – 59100 Roubaix – France.&nbsp;</p>
<p>&nbsp;Crédit illustrations : A compléter&nbsp;</p>
<p>
photos: <br>
James Wainscoat (Unsplash)<br>
dessins: <br>
Adrianna Watujo (MixKit)<br>',
                'email' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'titre' => 'L\'association Grouille',
                'texte' => 'L\'association "Grouille" a été fondée en 2012 par un collectif de personnes, aimant les insectes et se sentant très concernées par la préservation des ressources naturelles de notre planète.
Faisant face à une prochaine crise alimentaire que nos dirigeants estiment arriver d’ici à l’horizon 2030, il devient urgent d\'envisager de s\'alimenter autrement.
Les insectes sont là à notre portée, pourquoi ne pas en profiter ? Découvrez dans notre page "Insectes" les insectes comestibles et apprenez à les reconnaitre.

',
                'email' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => '2019-12-14 20:52:49',
                'titre' => 'Les insectes sont nos amis',
                'texte' => 'Dans notre association, nous aimons les insectes y compris dans notre assiette. L\'objectif de notre association est de promouvoir les insectes souvent mal connus ou mal aimés.
Ces derniers sont généralement considérés comme des animaux nuisibles qu\'on cherche à éliminer par tous les moyens et notamment en utilisant des pesticides.
Mais beaucoup d\'insectes sont comestibles et très riches en protéines. Ce serait dommage de ne pas en profiter. Nous vous proposons sur ce site des recettes à base d\'insectes faciles à préparer.<p>Et ensuite, vous ne direz plus jamais: "Quand je vois un six-pattes, je sors mon six-coups"!<br>
<p>
<br>
</p>
</p>',
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
                'updated_at' => '2019-12-16 11:29:02',
                'titre' => 'Politique de confidentialité',
                'texte' => 'Les données à caractère personnel collectées sur le site www.grouille.fr sont les suivantes :

Prénom – Nom - Adresse de messagerie – Téléphone&nbsp;<p>
<br>
</p>
<p>Les recettes et les commentaires postés sur ce site ne sont pas des données personnelles et deviennent la propriété du site un fois qu\'elles ont été postées.

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
</p>
<p>RGPD : Source https://www.maitre-eolas.fr/pages/mentionslegales&nbsp;</p>
<p>
<br>
</p>
<p>Le fait de vous connecter à ce blog et d’en lire le contenu n’entraîne la mise en œuvre d’aucun traitement de vos données personnelles, car si je vous aime du bon du cœur, vos données personnelles me laissent aussi froid qu’un glacier, si vous vous souvenez de ce que c’était. Si vous laissez un commentaire sous un billet, votre adresse IP sera conservée jusqu’au retrait dudit commentaire, et pour une durée minimale d’un an, car telle est la loi, et j’aime la loi. J’aime aussi le thé et le rugby, mais ce n’est pas le sujet.

De même, il vous sera demandé d’entrer une adresse e-mail valide (mais non vérifiée, on se fait confiance, hein ?), qui ne sera point communiquée à qui que ce soit sans ordre judiciaire régulier en la forme et légal au fond (je rejette comme douteuses toutes les demandes avec une faute d’accord du participe passé, ça paralyse bien les enquêtes policières).&nbsp;</p>
<p>
<br>
</p>
<p>Hormis cela, votre venue ne laissera pas plus de trace ici qu’Eric Ciotti à l’Assemblée nationale : oublié aussitôt que parti. Vous pouvez, car la loi, en fait le Règlement Général sur la Protection des Données, vous le permet, demander à accéder à l’ensemble de vos données personnelles. La demande peut être effectuée via la page de contact ici, et je vous enverrai par retour de mail une jolie page blanche, car c’est important de respecter la loi. Vous pourrez l’imprimer si vous voulez, mais de prime abord, ça me paraît assez idiot.

Mis à jour le 18 août 2019. Ouais, je fais mes mentions légales en vacances si je veux.</p>',
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