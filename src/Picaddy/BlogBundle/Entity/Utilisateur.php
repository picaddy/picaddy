<?

namespace Picaddy\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @orm:Entity
 * @orm:Table(name="utilisateur")
 */
class Utilisateur
{
    /**
     * @orm:Id
     * @orm:Column(type="integer")
     * @orm:GeneratedValue(strategy="AUTO")
     *
     * @var integer $id
     */
    protected $id;

    /**
     * @orm:Column(type="string",length="255",name="nom")
     *
     * @var string $nom
     */
    protected $nom;
    
    /**
     * @orm:Column(type="string",length="255",name="prenom")
     * 
     * @var string $prenom
     * 
     */
    protected $prenom;

    /**
     * @orm:Column(type="string",length="255",name="email")
     *
     * @var string $email
     */
    protected $email;

    /**
     * @orm:Column(type="string",length="50",name="password")
     *
     * @var string $password
     */
    protected $password;

    /**
     * @orm:OneToMany(targetEntity="Article",mappedBy="utilisateur")
     * @orm:OrderBy({"created_at" = "DESC"})
     * @var ArrayCollection $articles
     *
     */
    protected $articles;

    /**
     *  Constructeur de notre objet Utilisateur
     */
    public function __construct()
    {
        //On initialise notre liste d'articles
        $this->articles = new ArrayCollection();
 
    }
    
    public function init($nom,$prenom,$password,$email)
    {
        //On initialise notre liste d'articles
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->password = $password;
        $this->email = $email;
        
        $this->articles = new ArrayCollection();
    }

    /****************************************
     *              Getters
     ***************************************/
     public function getId()
     {
        return $this->id;         
     }

     public function getNom()
     {
         return $this->nom;
     }

     public function setNom($name)
     {
         $this->nom = $name;
     }

     public function getPrenom()
     {
         return $this->prenom;
     }

     public function setPrenom($lastname)
     {
         $this->prenom = $lastname;
     }
     
     public function getEmail()
     {
         return $this->email;
     }

     public function setMail($mail)
     {
         $this->email = $mail;
     }

     public function getArticles()
     {
         return $this->articles;
     }
}



?>