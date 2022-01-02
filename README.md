
# Wordpress Plugin (نمایش اخبار ارز دیجیتال - افزونه وردپرس)

نمایش اخبار روز و بلادرنگ از تمام منابع خبری در حوزه ارز دیجیتال و تحلیل فاندامنتال



![image](https://user-images.githubusercontent.com/55010722/147877441-6e00657e-8c1c-4ede-bfab-a92dbb22ce18.png)

## Installation (روش نصب و استفاده)

- Go to “Plugins” in your WordPress dashboard

- Click on “Add New”

- Find your plugin via File upload

- Install your plugin

- Activate the plugin
  

## (Plugin Help Programming) راهنما برنامه نویسی افزونه

https://sunnyweb.ir/cryptopanic_plugin/

## (Plugin installation file) فایل نصب افزونه

https://api.sunnyweb.ir/data/plugin_news.zip

## (Sunny Web token) دریافت توکن رایگان سانی وب

https://api.sunnyweb.ir/register


## Example Response (نمونه خروجی درخواست وب سرویس)

https://api.sunnyweb.ir/api/coingecko/[token]/[coin]
```bash
 [
  {
    "kind": "news",
    "domain": "zycrypto.com",
    "votes": {
      "negative": 0,
      "positive": 6,
      "important": 3,
      "liked": 4,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 0,
      "comments": 1
    },
    "source": {
      "title": "ZyCrypto",
      "region": "en",
      "domain": "zycrypto.com",
      "path": null,
      "url": "https://zycrypto.com/el-salvador-president-nayib-bukele-strongly-believes-bitcoin-will-hit-100000-this-year/"
    },
    "title": "El Salvador President Nayib Bukele Strongly Believes Bitcoin Will Hit $100,000 This Year",
    "published_at": "2022-01-02T12:40:38Z",
    "url": "https://cryptopanic.com/news/13844554/El-Salvador-President-Nayib-Bukele-Strongly-Believes-Bitcoin-Will-Hit-100000-This-Year",
    "slug": "El-Salvador-President-Nayib-Bukele-Strongly-Believes-Bitcoin-Will-Hit-100000-This-Year",
    "currencies": [
      {
        "code": "BTC",
        "title": "Bitcoin",
        "slug": "bitcoin",
        "url": "https://cryptopanic.com/news/bitcoin/"
      }
    ],
    "id": 13844554,
    "created_at": "2022-01-02T12:40:38Z",
    "metadata": {
      "image": "https://zycrypto.com/wp-content/uploads/2022/01/El-Salvador-President-Nayib-Bukele-Strongly-Believes-Bitcoin-Will-Hit-100000-This-Year.jpg",
      "description": "Nayib Bukele believes that Bitcoin will hit $100,000 this year despite markets having closed with their heads hanging in 2021. According to a Sunday tweet, the El Salvador president shared a list of predictions regarding the nascent cryptocurrency, rekindling the expectancy of Bitcoiners. Despite hopes that the cryptocurrency could hit a six-figure price tag running […]"
    }
  },
  {
    "kind": "news",
    "domain": "beincrypto.com",
    "votes": {
      "negative": 2,
      "positive": 6,
      "important": 5,
      "liked": 7,
      "disliked": 1,
      "lol": 2,
      "toxic": 0,
      "saved": 0,
      "comments": 1
    },
    "source": {
      "title": "BeInCrypto",
      "region": "en",
      "domain": "beincrypto.com",
      "path": null,
      "url": "https://beincrypto.com/cardano-leads-pack-with-most-developer-activity-in-2021/"
    },
    "title": "Cardano Leads Pack With Most Developer Activity in 2021",
    "published_at": "2022-01-02T12:03:54Z",
    "url": "https://cryptopanic.com/news/13844518/Cardano-Leads-Pack-With-Most-Developer-Activity-in-2021",
    "slug": "Cardano-Leads-Pack-With-Most-Developer-Activity-in-2021",
    "currencies": [
      {
        "code": "ADA",
        "title": "Cardano",
        "slug": "cardano",
        "url": "https://cryptopanic.com/news/cardano/"
      }
    ],
    "id": 13844518,
    "created_at": "2022-01-02T12:03:54Z",
    "metadata": {
      "image": "https://s32659.pcdn.co/wp-content/uploads/2022/01/cardano1.jpg",
      "description": "<p>GitHub reveals some interesting statistics regarding developer involvement in active blockchain projects for 2021.</p>\n"
    }
  },
  {
    "kind": "news",
    "domain": "u.today",
    "votes": {
      "negative": 0,
      "positive": 9,
      "important": 5,
      "liked": 7,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 3,
      "comments": 0
    },
    "source": {
      "title": "U.Today",
      "region": "en",
      "domain": "u.today",
      "path": null,
      "url": "https://u.today/445-million-xrp-moved-by-ripple-and-anon-whale-as-xrp-price-expected-to-spike-in-april-2022"
    },
    "title": "445 Million XRP Moved by Ripple and Anon Whale as XRP Price Expected to Spike in April 2022",
    "published_at": "2022-01-02T11:53:00Z",
    "url": "https://cryptopanic.com/news/13844489/445-Million-XRP-Moved-by-Ripple-and-Anon-Whale-as-XRP-Price-Expected-to-Spike-in-April-2022",
    "slug": "445-Million-XRP-Moved-by-Ripple-and-Anon-Whale-as-XRP-Price-Expected-to-Spike-in-April-2022",
    "currencies": [
      {
        "code": "XRP",
        "title": "XRP",
        "slug": "ripple",
        "url": "https://cryptopanic.com/news/ripple/"
      }
    ],
    "id": 13844489,
    "created_at": "2022-01-02T11:53:00Z",
    "metadata": {
      "image": "https://u.today/sites/default/files/styles/1200x900/public/2022-01/AdobeStock_244283064.jpeg",
      "description": "<p>Ripple, anonymous wallet and a major exchange shovel a close to half a billion XRP, while the price is expects to soar in spring 2022</p>"
    }
  },
  {
    "kind": "news",
    "domain": "zycrypto.com",
    "votes": {
      "negative": 2,
      "positive": 5,
      "important": 3,
      "liked": 4,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 0,
      "comments": 0
    },
    "source": {
      "title": "ZyCrypto",
      "region": "en",
      "domain": "zycrypto.com",
      "path": null,
      "url": "https://zycrypto.com/shiba-inu-shedding-memecoin-tag-moves-big-into-daos-with-beta-version-launch/"
    },
    "title": "Shiba Inu Shedding MemeCoin Tag, Moves Big Into DAOs With Beta Version Launch",
    "published_at": "2022-01-02T11:26:02Z",
    "url": "https://cryptopanic.com/news/13844454/Shiba-Inu-Shedding-MemeCoin-Tag-Moves-Big-Into-DAOs-With-Beta-Version-Launch",
    "slug": "Shiba-Inu-Shedding-MemeCoin-Tag-Moves-Big-Into-DAOs-With-Beta-Version-Launch",
    "currencies": [
      {
        "code": "SHIB",
        "title": "Shiba Inu",
        "slug": "shiba-inu",
        "url": "https://cryptopanic.com/news/shiba-inu/"
      }
    ],
    "id": 13844454,
    "created_at": "2022-01-02T11:26:02Z",
    "metadata": {
      "image": "https://zycrypto.com/wp-content/uploads/2021/10/Robinhood-Rival-Public-Adds-Shiba-Inu-Trading-To-Its-Platform.jpg",
      "description": "The DAO is to be rolled out in phases to empower the community. Shiba Inu is taking steps to lose the meme coin tag that has followed it since its launch.  The Shiba Inu team has disclosed the launch of its DAO. Developers of the token have said this is in line with their goal […]"
    }
  },
  {
    "kind": "news",
    "domain": "u.today",
    "votes": {
      "negative": 1,
      "positive": 10,
      "important": 7,
      "liked": 10,
      "disliked": 1,
      "lol": 4,
      "toxic": 0,
      "saved": 1,
      "comments": 2
    },
    "source": {
      "title": "U.Today",
      "region": "en",
      "domain": "u.today",
      "path": null,
      "url": "https://u.today/charles-hoskinson-criticizes-us-crypto-taxation-system-mocking-crypto-projects-with-dirty-titles"
    },
    "title": "Charles Hoskinson Criticizes US Crypto Taxation System, Mocking Crypto Projects with Dirty Titles",
    "published_at": "2022-01-02T11:03:00Z",
    "url": "https://cryptopanic.com/news/13844425/Charles-Hoskinson-Criticizes-US-Crypto-Taxation-System-Mocking-Crypto-Projects-with-Dirty-Titles",
    "slug": "Charles-Hoskinson-Criticizes-US-Crypto-Taxation-System-Mocking-Crypto-Projects-with-Dirty-Titles",
    "currencies": [
      {
        "code": "ADA",
        "title": "Cardano",
        "slug": "cardano",
        "url": "https://cryptopanic.com/news/cardano/"
      }
    ],
    "id": 13844425,
    "created_at": "2022-01-02T11:03:00Z",
    "metadata": {
      "image": "https://u.today/sites/default/files/styles/1200x900/public/2022-01/10758.jpg",
      "description": "<p>Cardano founder is criticizing the US system of taxing crypto, also mocking cryptocurrency projects with titles related to sex</p>"
    }
  },
  {
    "kind": "news",
    "domain": "u.today",
    "votes": {
      "negative": 0,
      "positive": 5,
      "important": 5,
      "liked": 4,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 0,
      "comments": 1
    },
    "source": {
      "title": "U.Today",
      "region": "en",
      "domain": "u.today",
      "path": null,
      "url": "https://u.today/two-more-countries-will-adopt-bitcoin-as-legal-tender-this-year-el-salvador-president-predicts"
    },
    "title": "Two More Countries Will Adopt Bitcoin as Legal Tender This Year, El Salvador President Predicts",
    "published_at": "2022-01-02T10:41:10Z",
    "url": "https://cryptopanic.com/news/13844391/Two-More-Countries-Will-Adopt-Bitcoin-as-Legal-Tender-This-Year-El-Salvador-President-Predicts",
    "slug": "Two-More-Countries-Will-Adopt-Bitcoin-as-Legal-Tender-This-Year-El-Salvador-President-Predicts",
    "currencies": [
      {
        "code": "BTC",
        "title": "Bitcoin",
        "slug": "bitcoin",
        "url": "https://cryptopanic.com/news/bitcoin/"
      }
    ],
    "id": 13844391,
    "created_at": "2022-01-02T10:41:10Z",
    "metadata": {
      "image": "https://u.today/sites/default/files/styles/1200x900/public/2022-01/11744.jpg",
      "description": "<p>Nayib Bukele has shared some of his predictions for 2022</p>"
    }
  },
  {
    "kind": "news",
    "domain": "beincrypto.com",
    "votes": {
      "negative": 4,
      "positive": 8,
      "important": 3,
      "liked": 11,
      "disliked": 1,
      "lol": 2,
      "toxic": 0,
      "saved": 1,
      "comments": 1
    },
    "source": {
      "title": "BeInCrypto",
      "region": "en",
      "domain": "beincrypto.com",
      "path": null,
      "url": "https://beincrypto.com/shiba-inu-shib-burns-over-125-million-shib-within-last-five-days/"
    },
    "title": "Shiba Inu (SHIB) Burns Over 125 Million SHIB Within Last Five Days",
    "published_at": "2022-01-02T10:06:02Z",
    "url": "https://cryptopanic.com/news/13844359/Shiba-Inu-SHIB-Burns-Over-125-Million-SHIB-Within-Last-Five-Days",
    "slug": "Shiba-Inu-SHIB-Burns-Over-125-Million-SHIB-Within-Last-Five-Days",
    "currencies": [
      {
        "code": "SHIB",
        "title": "Shiba Inu",
        "slug": "shiba-inu",
        "url": "https://cryptopanic.com/news/shiba-inu/"
      }
    ],
    "id": 13844359,
    "created_at": "2022-01-02T10:06:02Z",
    "metadata": {
      "image": "https://s32659.pcdn.co/wp-content/uploads/2022/01/shiba-inu-SHIB.jpg",
      "description": "<p>Over 125 million SHIB has been burned in the last five days and over 5.5 million in the previous 24 hours.</p>\n"
    }
  },
  {
    "kind": "news",
    "domain": "cointelegraph.com",
    "votes": {
      "negative": 1,
      "positive": 11,
      "important": 6,
      "liked": 9,
      "disliked": 0,
      "lol": 2,
      "toxic": 0,
      "saved": 2,
      "comments": 0
    },
    "source": {
      "title": "CoinTelegraph",
      "region": "en",
      "domain": "cointelegraph.com",
      "path": null,
      "url": "https://cointelegraph.com/news/president-bukele-predicts-bitcoin-100k-rally-further-legal-adoption-and-more"
    },
    "title": "President Bukele predicts Bitcoin $100k rally, further legal adoption and more",
    "published_at": "2022-01-02T09:47:19Z",
    "url": "https://cryptopanic.com/news/13844317/President-Bukele-predicts-Bitcoin-100k-rally-further-legal-adoption-and-more",
    "slug": "President-Bukele-predicts-Bitcoin-100k-rally-further-legal-adoption-and-more",
    "currencies": [
      {
        "code": "BTC",
        "title": "Bitcoin",
        "slug": "bitcoin",
        "url": "https://cryptopanic.com/news/bitcoin/"
      }
    ],
    "id": 13844317,
    "created_at": "2022-01-02T09:47:19Z",
    "metadata": {
      "description": "<p>Bukele also envisions an oncoming explosive growth for El Salvador’s two in-house BTC-based initiatives — Bitcoin City and Volcano bonds. </p>"
    }
  },
  {
    "kind": "news",
    "domain": "cointelegraph.com",
    "votes": {
      "negative": 1,
      "positive": 5,
      "important": 3,
      "liked": 10,
      "disliked": 1,
      "lol": 1,
      "toxic": 0,
      "saved": 2,
      "comments": 0
    },
    "source": {
      "title": "CoinTelegraph",
      "region": "en",
      "domain": "cointelegraph.com",
      "path": null,
      "url": "https://cointelegraph.com/news/ethereum-white-paper-predicted-defi-but-missed-nfts-vitalik-buterin"
    },
    "title": "Ethereum white paper predicted DeFi but missed NFTs: Vitalik Buterin",
    "published_at": "2022-01-02T07:52:55Z",
    "url": "https://cryptopanic.com/news/13842950/Ethereum-white-paper-predicted-DeFi-but-missed-NFTs-Vitalik-Buterin",
    "slug": "Ethereum-white-paper-predicted-DeFi-but-missed-NFTs-Vitalik-Buterin",
    "currencies": [
      {
        "code": "ETH",
        "title": "Ethereum",
        "slug": "ethereum",
        "url": "https://cryptopanic.com/news/ethereum/"
      },
      {
        "code": "USDT",
        "title": "Tether",
        "slug": "tether",
        "url": "https://cryptopanic.com/news/tether/"
      }
    ],
    "id": 13842950,
    "created_at": "2022-01-02T07:52:55Z",
    "metadata": {
      "description": "<p>Buterin still believes that “the internet of money should not cost more than 5 cents per transaction” and highlighted Ethereum’s continued efforts to improve the blockchain’s scalability capabilities.</p>"
    }
  },
  {
    "kind": "news",
    "domain": "cryptoglobe.com",
    "votes": {
      "negative": 3,
      "positive": 42,
      "important": 16,
      "liked": 39,
      "disliked": 1,
      "lol": 2,
      "toxic": 0,
      "saved": 10,
      "comments": 6
    },
    "source": {
      "title": "CryptoGlobe",
      "region": "en",
      "domain": "cryptoglobe.com",
      "path": null,
      "url": "https://www.cryptoglobe.com/latest/2022/01/dot-gavin-wood-talks-about-the-future-of-polkadot-in-2022/"
    },
    "title": "$DOT: Gavin Wood Talks About the Future of Polkadot in 2022",
    "published_at": "2022-01-02T07:03:02Z",
    "url": "https://cryptopanic.com/news/13842164/DOT-Gavin-Wood-Talks-About-the-Future-of-Polkadot-in-2022",
    "slug": "DOT-Gavin-Wood-Talks-About-the-Future-of-Polkadot-in-2022",
    "currencies": [
      {
        "code": "DOT",
        "title": "Polkadot",
        "slug": "polkadot",
        "url": "https://cryptopanic.com/news/polkadot/"
      },
      {
        "code": "KSM",
        "title": "Kusama",
        "slug": "kusama",
        "url": "https://cryptopanic.com/news/kusama/"
      }
    ],
    "id": 13842164,
    "created_at": "2022-01-02T07:03:02Z",
    "metadata": {
      "image": "https://cryptoglobe.s3.eu-west-2.amazonaws.com/2021/10/Gavin-Wood-in-Oct-2018-768x403.jpg",
      "description": "<p>On Friday (31 December 2021), British computer scientist&#160;Dr. Gavin Wood, co-founder of&#160;Ethereum&#160;($ETH),&#160;Polkadot&#160;($DOT), and&#160;Kusama&#160;($KSM), talked about &#8220;what the Polkadot project achieved over 2021&#8221; and what lies ahead in 2022. Here is an&#160;overview&#160;of Polkadot using information from the Polkadot website: &#8220;Polkadot is a network protocol that allows arbitrary data&#8212;not just tokens&#8212;to be...</p></body></html>\n"
    }
  },
  {
    "kind": "news",
    "domain": "cryptoglobe.com",
    "votes": {
      "negative": 3,
      "positive": 13,
      "important": 3,
      "liked": 9,
      "disliked": 8,
      "lol": 9,
      "toxic": 0,
      "saved": 0,
      "comments": 4
    },
    "source": {
      "title": "CryptoGlobe",
      "region": "en",
      "domain": "cryptoglobe.com",
      "path": null,
      "url": "https://www.cryptoglobe.com/latest/2022/01/luna-cnbc-tells-investors-about-the-risks-of-investing-in-terras-native-token/"
    },
    "title": "$LUNA: CNBC Tells Investors About the Risks of Investing in Terra’s Native Token",
    "published_at": "2022-01-01T20:28:09Z",
    "url": "https://cryptopanic.com/news/13839401/LUNA-CNBC-Tells-Investors-About-the-Risks-of-Investing-in-Terras-Native-Token",
    "slug": "LUNA-CNBC-Tells-Investors-About-the-Risks-of-Investing-in-Terras-Native-Token",
    "currencies": [
      {
        "code": "LUNA",
        "title": "Terra",
        "slug": "luna-terra",
        "url": "https://cryptopanic.com/news/luna-terra/"
      },
      {
        "code": "LUNA",
        "title": "Terra",
        "slug": "terra-luna",
        "url": "https://cryptopanic.com/news/terra-luna/"
      }
    ],
    "id": 13839401,
    "created_at": "2022-01-01T20:28:09Z",
    "metadata": {
      "image": "https://cryptoglobe.s3.eu-west-2.amazonaws.com/2022/01/risk-768x512.jpg",
      "description": "<p>Recently, CNBC’s “Make It” looked at the risks of investing in $LUNA, the “hot” token that the “cool kids” love to invest in. $LUNA is the native token of algorithmic stablecoin platform Terra. According to Binance Research, Terra is a Proof of Stake (PoS) blockchain. They also say that $LUNA is “used in the issuance of stablecoins […]</p>"
    }
  },
  {
    "kind": "news",
    "domain": "dailyhodl.com",
    "votes": {
      "negative": 0,
      "positive": 6,
      "important": 0,
      "liked": 7,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 1,
      "comments": 2
    },
    "source": {
      "title": "The Daily Hodl",
      "region": "en",
      "domain": "dailyhodl.com",
      "path": null,
      "url": "https://dailyhodl.com/2021/12/31/heres-what-to-expect-from-this-29000000000-market-cap-altcoin-in-2022-according-to-ethereum-co-founder/"
    },
    "title": "Here’s What To Expect From This $29,000,000,000-Market Cap Altcoin in 2022, According to Ethereum Co-Founder",
    "published_at": "2022-01-01T19:45:00Z",
    "url": "https://cryptopanic.com/news/13839390/Heres-What-To-Expect-From-This-29000000000-Market-Cap-Altcoin-in-2022-According-to-Ethereum-Co-Founder",
    "slug": "Heres-What-To-Expect-From-This-29000000000-Market-Cap-Altcoin-in-2022-According-to-Ethereum-Co-Founder",
    "currencies": [
      {
        "code": "ETH",
        "title": "Ethereum",
        "slug": "ethereum",
        "url": "https://cryptopanic.com/news/ethereum/"
      },
      {
        "code": "DOT",
        "title": "Polkadot",
        "slug": "polkadot",
        "url": "https://cryptopanic.com/news/polkadot/"
      }
    ],
    "id": 13839390,
    "created_at": "2022-01-01T19:45:00Z",
    "metadata": {
      "description": "<p>A pioneer in the world of blockchain is giving his 2022 prognosis for an altcoin which has had a breakout year both in terms of price and project milestones. In a new blog post, Ethereum co-founder Gavin Wood discusses the future of cross-chain interoperability protocol Polkadot (DOT), which he founded in 2016. “More than any […]</p>\n"
    }
  },
  {
    "kind": "news",
    "domain": "u.today",
    "votes": {
      "negative": 1,
      "positive": 9,
      "important": 1,
      "liked": 5,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 0,
      "comments": 0
    },
    "source": {
      "title": "U.Today",
      "region": "en",
      "domain": "u.today",
      "path": null,
      "url": "https://u.today/btc-xrp-and-bnb-price-analysis-for-january-1"
    },
    "title": "BTC, XRP, and BNB Price Analysis for January 1",
    "published_at": "2022-01-01T18:38:00Z",
    "url": "https://cryptopanic.com/news/13839179/BTC-XRP-and-BNB-Price-Analysis-for-January-1",
    "slug": "BTC-XRP-and-BNB-Price-Analysis-for-January-1",
    "currencies": [
      {
        "code": "BNB",
        "title": "Binance Coin",
        "slug": "binancecoin",
        "url": "https://cryptopanic.com/news/binancecoin/"
      }
    ],
    "id": 13839179,
    "created_at": "2022-01-01T18:38:00Z",
    "metadata": {
      "image": "https://u.today/sites/default/files/styles/1200x900/public/node-28748.jpg",
      "description": "<p>Is the market ready to start the new year on a high note?</p>"
    }
  },
  {
    "kind": "news",
    "domain": "zycrypto.com",
    "votes": {
      "negative": 3,
      "positive": 6,
      "important": 2,
      "liked": 5,
      "disliked": 3,
      "lol": 1,
      "toxic": 0,
      "saved": 1,
      "comments": 10
    },
    "source": {
      "title": "ZyCrypto",
      "region": "en",
      "domain": "zycrypto.com",
      "path": null,
      "url": "https://zycrypto.com/dogecoin-as-the-official-currency-of-mars-elon-musk-ponders/"
    },
    "title": "Dogecoin As The Official Currency Of Mars? Elon Musk Wavers",
    "published_at": "2022-01-01T18:35:23Z",
    "url": "https://cryptopanic.com/news/13839180/Dogecoin-As-The-Official-Currency-Of-Mars-Elon-Musk-Wavers",
    "slug": "Dogecoin-As-The-Official-Currency-Of-Mars-Elon-Musk-Wavers",
    "currencies": [
      {
        "code": "BTC",
        "title": "Bitcoin",
        "slug": "bitcoin",
        "url": "https://cryptopanic.com/news/bitcoin/"
      },
      {
        "code": "DOGE",
        "title": "Dogecoin",
        "slug": "dogecoin",
        "url": "https://cryptopanic.com/news/dogecoin/"
      }
    ],
    "id": 13839180,
    "created_at": "2022-01-01T18:35:23Z",
    "metadata": {
      "image": "https://zycrypto.com/wp-content/uploads/2021/02/More-Competition-For-Bitcoin-and-DOGE-As-Elon-Musk-Mulls-MarsCoin.jpg",
      "description": "Musk reveals that DOGE, more than any other crypto, checks out as a currency.  He likes Dogecoin as the currency of Mars but says it is up to the people. There is no sign of the billionaire relenting in his support for the token. Elon Musk has continued to express his fascination with meme coin […]"
    }
  },
  {
    "kind": "news",
    "domain": "theblockcrypto.com",
    "votes": {
      "negative": 1,
      "positive": 8,
      "important": 0,
      "liked": 4,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 0,
      "comments": 0
    },
    "source": {
      "title": "The Block",
      "region": "en",
      "domain": "theblockcrypto.com",
      "path": null,
      "url": "https://www.theblockcrypto.com/post/128866/a-look-back-at-the-biggest-bitcoin-etf-news-of-2021?utm_source=cryptopanic&utm_medium=rss"
    },
    "title": "A look back at the biggest bitcoin ETF news of 2021",
    "published_at": "2022-01-01T17:19:07Z",
    "url": "https://cryptopanic.com/news/13838990/A-look-back-at-the-biggest-bitcoin-ETF-news-of-2021",
    "slug": "A-look-back-at-the-biggest-bitcoin-ETF-news-of-2021",
    "currencies": [
      {
        "code": "BTC",
        "title": "Bitcoin",
        "slug": "bitcoin",
        "url": "https://cryptopanic.com/news/bitcoin/"
      }
    ],
    "id": 13838990,
    "created_at": "2022-01-01T17:19:07Z",
    "metadata": {
      "image": "https://www.tbstat.com/wp/uploads/2021/02/20210219_Bitcoin_ETF_Generic.jpg",
      "description": "<p>The Block takes a look back at the key bitcoin ETF news events of 2021, from Gensler's confirmation, to futures approvals, to spot denials. </p>\n"
    }
  },
  {
    "kind": "news",
    "domain": "theblockcrypto.com",
    "votes": {
      "negative": 0,
      "positive": 55,
      "important": 31,
      "liked": 46,
      "disliked": 0,
      "lol": 2,
      "toxic": 0,
      "saved": 12,
      "comments": 10
    },
    "source": {
      "title": "The Block",
      "region": "en",
      "domain": "theblockcrypto.com",
      "path": null,
      "url": "https://www.theblockcrypto.com/post/128874/square-enix-plans-to-invest-more-in-blockchain-gaming-in-2022?utm_source=cryptopanic&utm_medium=rss"
    },
    "title": "Square Enix plans to invest more in blockchain gaming in 2022",
    "published_at": "2022-01-01T17:05:33Z",
    "url": "https://cryptopanic.com/news/13838973/Square-Enix-plans-to-invest-more-in-blockchain-gaming-in-2022",
    "slug": "Square-Enix-plans-to-invest-more-in-blockchain-gaming-in-2022",
    "id": 13838973,
    "created_at": "2022-01-01T17:05:33Z",
    "metadata": {
      "image": "https://www.tbstat.com/wp/uploads/2022/01/SE.jpg",
      "description": "<p>One of the world's best-known gaming companies intends to grow its footprint in the world of blockchain-based gaming this year.</p>\n"
    }
  },
  {
    "kind": "news",
    "domain": "zycrypto.com",
    "votes": {
      "negative": 3,
      "positive": 8,
      "important": 5,
      "liked": 6,
      "disliked": 4,
      "lol": 7,
      "toxic": 0,
      "saved": 1,
      "comments": 27
    },
    "source": {
      "title": "ZyCrypto",
      "region": "en",
      "domain": "zycrypto.com",
      "path": null,
      "url": "https://zycrypto.com/bitcoin-fast-losing-its-first-mover-advantage-as-btcs-market-dominance-slips-below-40-for-first-time-since-2018/"
    },
    "title": "Bitcoin Fast Losing Its First-Mover Advantage As BTC’s Market Dominance Slips Below 40%",
    "published_at": "2022-01-01T16:55:09Z",
    "url": "https://cryptopanic.com/news/13838922/Bitcoin-Fast-Losing-Its-First-Mover-Advantage-As-BTCs-Market-Dominance-Slips-Below-40",
    "slug": "Bitcoin-Fast-Losing-Its-First-Mover-Advantage-As-BTCs-Market-Dominance-Slips-Below-40",
    "currencies": [
      {
        "code": "BTC",
        "title": "Bitcoin",
        "slug": "bitcoin",
        "url": "https://cryptopanic.com/news/bitcoin/"
      },
      {
        "code": "ADA",
        "title": "Cardano",
        "slug": "cardano",
        "url": "https://cryptopanic.com/news/cardano/"
      }
    ],
    "id": 13838922,
    "created_at": "2022-01-01T16:55:09Z",
    "metadata": {
      "image": "https://zycrypto.com/wp-content/uploads/2020/06/Bitcoin-Dominance-is-‘Dangling’-and-Cardano-Looks-Poised-to-Lead-the-Altseason.jpg",
      "description": "Bitcoin’s dominance drops below 38% for the first time since 2018.  Pundits speculate that this could be the beginning of the dominating market for altcoins. As Bitcoin falls, other projects are eager to gobble up the asset’s share. Bitcoin’s market cap dominance is going through a year-long downtrend. The last time the asset experienced these […]"
    }
  },
  {
    "kind": "news",
    "domain": "ambcrypto.com",
    "votes": {
      "negative": 5,
      "positive": 18,
      "important": 9,
      "liked": 16,
      "disliked": 3,
      "lol": 1,
      "toxic": 0,
      "saved": 0,
      "comments": 10
    },
    "source": {
      "title": "AMBCrypto",
      "region": "en",
      "domain": "ambcrypto.com",
      "path": null,
      "url": "https://ambcrypto.com/solanas-phantom-wallet-sees-record-growth-with-over-1-8m-maus-in-9-months/"
    },
    "title": "Solana’s Phantom wallet sees record growth with over 1.8M MAUs in 9 months",
    "published_at": "2022-01-01T16:30:02Z",
    "url": "https://cryptopanic.com/news/13838872/Solanas-Phantom-wallet-sees-record-growth-with-over-18M-MAUs-in-9-months",
    "slug": "Solanas-Phantom-wallet-sees-record-growth-with-over-18M-MAUs-in-9-months",
    "currencies": [
      {
        "code": "SOL",
        "title": "Solana",
        "slug": "solana",
        "url": "https://cryptopanic.com/news/solana/"
      },
      {
        "code": "FLOW",
        "title": "Flower Solana",
        "slug": "flower-solana",
        "url": "https://cryptopanic.com/news/flower-solana/"
      }
    ],
    "id": 13838872,
    "created_at": "2022-01-01T16:30:02Z",
    "metadata": {
      "image": "https://files.ambcrypto.com/wp-content/uploads/2022/01/01124922/encourline-DSYQJOH0GbU-unsplash.jpg",
      "description": "<p>Solana (SOL) is one of the most popular blockchain platforms in the world right now. It’s highly regarded in the blockchain community because of its speed and security. Since it uses proof-of-history, it’s also eco-friendly. Solana has become a very attractive cryptocurrency in 2021, as its value soared by more than 5,077% in a mere […]</p>"
    }
  },
  {
    "kind": "news",
    "domain": "ambcrypto.com",
    "votes": {
      "negative": 0,
      "positive": 9,
      "important": 3,
      "liked": 8,
      "disliked": 0,
      "lol": 0,
      "toxic": 0,
      "saved": 0,
      "comments": 0
    },
    "source": {
      "title": "AMBCrypto",
      "region": "en",
      "domain": "ambcrypto.com",
      "path": null,
      "url": "https://ambcrypto.com/dots-2021-journey-has-been-a-wild-one-but-can-it-deliver-good-returns-in-2022/"
    },
    "title": "DOT’s 2021 journey has been a wild one, but can it deliver good returns in 2022",
    "published_at": "2022-01-01T15:00:29Z",
    "url": "https://cryptopanic.com/news/13838680/DOTs-2021-journey-has-been-a-wild-one-but-can-it-deliver-good-returns-in-2022",
    "slug": "DOTs-2021-journey-has-been-a-wild-one-but-can-it-deliver-good-returns-in-2022",
    "currencies": [
      {
        "code": "DOT",
        "title": "Polkadot",
        "slug": "polkadot",
        "url": "https://cryptopanic.com/news/polkadot/"
      },
      {
        "code": "KSM",
        "title": "Kusama",
        "slug": "kusama",
        "url": "https://cryptopanic.com/news/kusama/"
      }
    ],
    "id": 13838680,
    "created_at": "2022-01-01T15:00:29Z",
    "metadata": {
      "image": "https://files.ambcrypto.com/wp-content/uploads/2022/01/01150507/mick-haupt-w_e83LK4UTU-unsplash.jpg",
      "description": "<p>Open-source blockchain platform Polkadot&#160;announced the launch of its parachains (or parallelized chain). It aimed at improving the interoperability between multiple blockchains. According to the announcement, the Polkadot team invested five years into the development of the parachains, which were allocated to teams via auctions. Well whatever the ingredient, Polkadot&#8217;s vision of enabling...</p></body></html>\n"
    }
  },
  {
    "kind": "news",
    "domain": "cryptoglobe.com",
    "votes": {
      "negative": 2,
      "positive": 5,
      "important": 0,
      "liked": 3,
      "disliked": 1,
      "lol": 3,
      "toxic": 0,
      "saved": 0,
      "comments": 1
    },
    "source": {
      "title": "CryptoGlobe",
      "region": "en",
      "domain": "cryptoglobe.com",
      "path": null,
      "url": "https://www.cryptoglobe.com/latest/2022/01/elon-musk-on-mars-dogecoin-and-bitcoin/"
    },
    "title": "Elon Musk on Mars, Dogecoin, and Bitcoin",
    "published_at": "2022-01-01T12:40:52Z",
    "url": "https://cryptopanic.com/news/13838464/Elon-Musk-on-Mars-Dogecoin-and-Bitcoin",
    "slug": "Elon-Musk-on-Mars-Dogecoin-and-Bitcoin",
    "currencies": [
      {
        "code": "BTC",
        "title": "Bitcoin",
        "slug": "bitcoin",
        "url": "https://cryptopanic.com/news/bitcoin/"
      },
      {
        "code": "DOGE",
        "title": "Dogecoin",
        "slug": "dogecoin",
        "url": "https://cryptopanic.com/news/dogecoin/"
      }
    ],
    "id": 13838464,
    "created_at": "2022-01-01T12:40:52Z",
    "metadata": {
      "image": "https://cryptoglobe.s3.eu-west-2.amazonaws.com/2020/05/elon_musk_-_sxsw_2018-768x411.png",
      "description": "<p>During a recent interview, Tesla and Space X CEO Elon Musk shared his latest thoughts on money, cryptocurrency in general, Dogecoin, and Bitcoin. His comments came an interview for episode #252 of the Lex Fridman podcast. Below are some highlights from Musk’s comments during this excellent interview. Fridman and musk started this portion of the interview […]</p>"
    }
  }
]
```



