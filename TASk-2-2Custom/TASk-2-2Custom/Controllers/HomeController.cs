using Microsoft.AspNetCore.Mvc;
using System.Diagnostics;
using TASk_2_2Custom.Models;

namespace TASk_2_2Custom.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;
        private readonly IConfiguration _configuration;

        public HomeController(ILogger<HomeController> logger, IConfiguration configuration)
        {
            _logger = logger;
            _configuration = configuration;
        }
        public IActionResult Index()
        {
            ViewData["WelcomeMessage"] = _configuration["AppSettings:WelcomeMessage"];
            ViewData["DeploymentEnvironment"] = _configuration["AppSettings:DeploymentEnvironment"];
            ViewData["Region"] = _configuration["AppSettings:Region"];
            ViewData["ApiKeyStatus"] = string.IsNullOrEmpty(_configuration["AppSettings:ApiKey"]) ? "Not Configured" : "Configured (value hidden)";
            _logger.LogInformation("The Home Page requested at {Time} UTC", DateTime.UtcNow);
            return View();
        }
        public IActionResult Privacy()
        {
            return View();
        }
        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });


        }
    }
}
