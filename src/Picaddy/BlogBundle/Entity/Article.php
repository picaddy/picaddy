<?

namespace Picaddy\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @orm:Entity
 * @orm:Table(name="article")
 */
class Article
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
     * @orm:Column(type="string",length="255",name="titre")
     *
     * @var string $titre
     */
    protected $titre;

    /**
     * @orm:Column(type="string",length="255",name="slug")
     *
     * @var string $slug
     *
     */
    protected $slug;

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
     * @orm:Column(type="datetime",name="updated_at",nullable="true")
     *
     * @var datetime $updated_at
     */
    protected $updated_at;

    /**
     * @orm:OneToMany(targetEntity="Commentaire",mappedBy="article")
     * @orm:OrderBy({"created_at" = "DESC"})
     * @var ArrayCollection $commentaires
     *
     */
    protected $commentaires;


    /**
     * @orm:ManyToOne(targetEntity="Utilisateur",inversedBy="article")
     * @orm:JoinColumn(name="utilisateur_id",referencedColumnName="id")
     *
     * @orm Utilisateur $utilisateur
     */

    protected $utilisateur;



    /**
     * @orm:ManyToOne(targetEntity="Categorie",inversedBy="article")
     * @orm:JoinColumn(name="categorie_id",referencedColumnName="id")
     *
     * @orm Categorie $categorie
     */

    protected $categorie;

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function getAuteur()
    {
        return $this->utilisateur;
    }

    public function setAuteur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    public function getCommentaires()
    {
        return $this->commentaires;
    }
    
    /**
     *  Constructeur de notre objet Utilisateur
     */
    public function __construct()
    {
        //On initialise notre liste de commentaires
        $this->commentaires = new ArrayCollection();
        //Initialisation de la date de creation
        $this->created_at = new \DateTime();

    }

    /**
     * Avant que l'entity soit mise à jour
     *
     * @orm:PreUpdate
     */
    public function preUpdate()
    {
        $this->updated_at = new \DateTime();
    }



}



?>
