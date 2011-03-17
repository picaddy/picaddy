<?

namespace Picaddy\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @orm:Entity
 * @orm:Table(name="commentaire")
 */
class Commentaire
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
     * @orm:Column(type="string",length="255",name="pseudo")
     *
     * @var string $pseudo
     */
    protected $pseudo;

    /**
     * @orm:Column(type="string",length="255",name="email")
     *
     * @var string $email
     */
    protected $email;

    /**
     * @orm:Column(type="string",length="255",name="url")
     *
     * @var string $url
     */
    protected $url;

     /**
     * @orm:Column(type="text",name="description")
     *
     * @var text $description
     */
    protected $description;


    /**
     * @orm:Column(type="datetime",name="created_at")
     *
     * @var datetime $created_at
     */
    protected $created_at;

  
    /**
     * @orm:ManyToOne(targetEntity="Article",inversedBy="commentaire")
     * @orm:JoinColumn(name="article_id",referencedColumnName="id")
     *
     * @var Article $article
     *
     */
    protected $article;

    /**
     *  Constructeur de notre objet Utilisateur
     */
    public function __construct()
    {
        //On initialise notre liste d'articles
        $this->articles = new ArrayCollection();
        $this->created_at = new \DateTime();

    }




}



?>